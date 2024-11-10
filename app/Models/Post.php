<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content'
    ];

    // Define the one-to-many relationship with Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
