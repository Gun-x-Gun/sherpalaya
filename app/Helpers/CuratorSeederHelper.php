<?php

namespace App\Helpers;

use Awcodes\Curator\Models\Media;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CuratorSeederHelper
{

    protected static function resolveFileData(string $filePath): array
    {
        if (!is_file($filePath)) {
            throw new Exception("No file found in path: " . $filePath);
        }

        // Extract file extension safely
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        if (!$extension) {
            throw new Exception("File extension could not be identified: " . $filePath);
        }

        // Generate unique filename
        $uuid = Str::uuid();
        $filename = "{$uuid}.{$extension}";
        $storagePath = "media/{$filename}";

        // Store the file in Laravel's storage (ensures correct permissions)
        Storage::disk('public')->put($storagePath, file_get_contents($filePath));

        // Get file details efficiently
        $mimeType = mime_content_type($filePath) ?: null;
        $fileSize = filesize($filePath) ?: null;
        $imageData = @getimagesize($filePath);
        $exifData = (stripos($mimeType, 'image') === 0) ? (@exif_read_data($filePath) ?: null) : null;

        return [
            'disk' => 'public',
            'directory' => 'media',
            'visibility' => 'public',
            'name' => $uuid,
            'path' => $storagePath,
            'width' => $imageData[0] ?? null,
            'height' => $imageData[1] ?? null,
            'size' => $fileSize,
            'type' => $mimeType,
            'ext' => $extension,
            'exif' => $exifData,
        ];
    }

    public static function seedBelongsTo(Model $related, string $relatedField, string|Media $filePath): Media
    {

        if ($filePath instanceof Media) {
            $media = $filePath;
        } else {
            $mediaData = self::resolveFileData($filePath);
            $media = Media::create($mediaData);
        }

        $related->update([
            $relatedField => $media->id
        ]);


        return $media;
    }

    public static function seedBelongsToMany(Model $related, string $relatedName, string|Media $filePath, array $attributes = []): Media
    {
        $media = null;
        if ($filePath instanceof Media) {
            $media = $filePath;
        } else {
            $mediaData = self::resolveFileData($filePath);
            $media = Media::create($mediaData);
        }

        $related->{$relatedName}()->attach($media, $attributes);

        return $media;
    }

    public static function clearStorage()
    {
        File::deleteDirectory(storage_path('media'), false);
    }
}
