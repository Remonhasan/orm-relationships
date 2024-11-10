# Laravel User and Profile One-to-One Relationship

This project demonstrates a simple **one-to-one** relationship between the `User` and `Profile` models in Laravel. The relationship is established using foreign key constraints and Eloquent relationships.

## Features

- One-to-One Relationship between `User` and `Profile`
- Laravel migrations, factories, and seeders for easy setup
- Basic CRUD operations for `User` and `Profile` models

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
The following diagram illustrates the one-to-one relationship between the Users and Profiles tables:
### Users and Profiles Relationship

| Users         |               | Profiles       |
|---------------|---------------|----------------|
| **id**        |<------------- | **id**         |
| **name**      |               | **user_id**    |
| **email**     |               | **bio**        |
| **password**  |               | **created_at** |
|               |               | **updated_at** |


