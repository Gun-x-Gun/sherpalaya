<?php

namespace App\Models;

use App\Enums\WebsiteSettingType;
use App\Helpers\CuratorModelHelper;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class WebsiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'identifier',
        'description',
        'type',
        'file_id',
        'default_value'
    ];

    protected $casts = [
        'type' => WebsiteSettingType::class
    ];

    public function file(): BelongsTo
    {
        return CuratorModelHelper::belongsTo($this, 'value');
    }
}
