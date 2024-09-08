<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cassette extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeActive(Builder $query)
    {
        return $query->where('status', 1);
    }

    public function rents()
    {
        return $this->hasMany(Rent::class, 'cassette_id', 'id');
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'movie_id', 'id');
    }

}
