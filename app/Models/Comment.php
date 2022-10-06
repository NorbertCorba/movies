<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = ['content', 'movie_id', 'created_at'];

    public function movie()
    {
        return $this->belongsTo(Movies::class);
    }

}