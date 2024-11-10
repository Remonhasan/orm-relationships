<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'comment'
    ];

    // Define the inverse of the relationship (a comment belongs to a post)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
