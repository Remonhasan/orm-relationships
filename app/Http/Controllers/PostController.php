<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Find all comments by Post 
        $post = Post::find(1); // Get the post with ID 1

        // Access comments associated with the post
        $comments = $post->comments;

        foreach ($comments as $comment) {
            echo $comment->comment . "<br>";
        }


        // Find Post by Comment  
        $comment = Comment::find(1); // Get the comment with ID 1

        // Access the post associated with the comment
        $post = $comment->post;

        echo $post->title; // Outputs the title of the post
    }
}
