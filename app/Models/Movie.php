<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', 1);
    }

    public function cassettes()
    {
        return $this->hasMany(Cassette::class, 'movie_id', 'id');
    }

}
