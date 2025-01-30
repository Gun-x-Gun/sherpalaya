<?php

namespace App\Models;

use App\Contracts\CanBeEasySearched;
use App\Enums\SearchType;
use App\Traits\EasySearch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Region extends Model implements CanBeEasySearched
{
    use EasySearch;

    protected $fillable = [
        'name',
    ];

    // Easy Search

    public function searchType(): SearchType
    {
        return SearchType::REGION;
    }


    public function searchResultTitle(): string
    {
        return $this->name;
    }

    public function searchResultUrl(): string
    {
        return $this->name;
    }

    public function searchResultImages(): Collection
    {
        return collect();
    }

    // RELATIONSHIPS

    public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
    public function treks()
    {
        return $this->hasMany(Trek::class);
    }
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
    public function peaks()
    {
        return $this->hasMany(Peak::class);
    }
    public function expeditions()
    {
        return $this->hasMany(Expedition::class);
    }
}
