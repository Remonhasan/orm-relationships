<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // Insert 10 users
        // User::factory(10)->create();

        // Insert 10 profiles
        // Profile::factory(10)->create();

        // Insert 10 profiles
        // Post::factory(10)->create();

        // Insert 10 comments
        // Comment::factory(10)->create();

        // Create 5 roles
        Role::factory(5)->create();

        // Create 10 users, each with random roles
        User::factory(10)->withRoles()->create();
    }
}
