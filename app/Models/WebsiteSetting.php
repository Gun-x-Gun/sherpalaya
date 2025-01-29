<?php

namespace App\Models;

use App\Enums\WebsiteSettingType;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identifier',
        'description',
        'type',
        'value',
        'default_value'
    ];

    protected $casts = [
        'type' => WebsiteSettingType::class
    ];

    public function file()
    {
        return $this->hasOne(Media::class, 'id', 'value');
    }
}
