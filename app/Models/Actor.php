<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', 1);
    }

    public function movies_types()
    {
        return $this->belongsToMany(MovieType::class, 'movies', 'actor_id', 'movie_type_id');
    }

}
