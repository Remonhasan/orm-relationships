# Laravel User and Profile One-to-One Relationship

This project demonstrates a simple **one-to-one** relationship between the `User` and `Profile` models in Laravel. The relationship is established using foreign key constraints and Eloquent relationships.

## Features

- One-to-One Relationship between `User` and `Profile`
- One-to-many Relationship between `Post` and `Comment`
- many-to-many Relationship

## Project Setup

### Prerequisites

Make sure you have the following installed:

- PHP (>=7.4)
- Composer
- Laravel (>=8.x)
- MySQL or another compatible database

### Installation

1. **Clone the repository**

```bash
git clone https://github.com/Remonhasan/orm-relationships.git
cd your-repo-name
```
**Clone the repository**
```bash
composer install
```
**Setup env**
```bash
cp .env.example .env
```
**Generate Key**
```bash
php artisan key:generate
```
**Setup Database**
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
**Run Migration**
```bash
php artisan migrate
```
**Seed Database**
```bash
php artisan db:seed
```
### One-to-One Relationship Diagram
The following diagram illustrates the one-to-one relationship between the `Users`and `Profiles` tables:
### Users and Profiles Relationship

| Users         |               | Profiles       |
|---------------|---------------|----------------|
| **name**      |               | **id**         |
| **id**        |<------------->| **user_id**    |
| **email**     |               | **bio**        |
| **password**  |               | **created_at** |
|               |               | **updated_at** |

### Access Relationship
```php
$user = User::find(1);
$profile = $user->profile; // Access the user's profile

$profile = Profile::find(1);
$user = $profile->user; // Access the profile's user
```
### One-to-Many Relationship Diagram
The following diagram illustrates the one-to-many relationship between the `Posts` and `Comments` tables:
### Posts and Comments Relationship

| Posts         |               | Comments       |
|---------------|---------------|----------------|
| **title**     |               | **id**         |
| **id**        |<------------>>| **post_id**    |
| **content**   |               | **comment**    |


### Access Relationship
```php
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
```
### Many-to-Many Relationship Diagram
The following diagram illustrates the one-to-many relationship between the `Roles`, `users` and `role_users` tables:
### `Roles`, `users` and `role_users` Relationship
```php
// User.php
public function roles()
{
    return $this->belongsToMany(Role::class, 'role_users');
}
```
```php
// Role.php
 // Define the many-to-many relationship
public function users()
{
    return $this->belongsToMany(User::class);
}
```
