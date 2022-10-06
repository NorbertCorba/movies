<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';

    protected $fillable = ['Title', 'Genre', 'Director', 'Year', 'Storyline'];


    public function addMovie($title, $genre, $director, $year, $storyline)
    {
        $this->movies()->create([
            'Title' => $title,
            'Genre' => $genre,
            'Director' => $director,
            'Year' => $year,
            'Storyline' => $storyline

        ]);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
