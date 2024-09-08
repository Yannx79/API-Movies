<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', 1);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movies', 'movie_type_id', 'actor_id');
    }

}
