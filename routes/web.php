<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// One to One Relationship
Route::get('/users', 'App\Http\Controllers\UserController@index');

// One to Many Relationship
Route::get('/posts', 'App\Http\Controllers\PostController@index');

// Many-to-Many Relationship
// Test assigning roles
Route::get('/user/{id}/assign-roles', [UserController::class, 'assignRoles']);

// Test removing roles
Route::get('/user/{id}/remove-roles', [UserController::class, 'removeRoles']);

// Test syncing roles
Route::get('/user/{id}/sync-roles', [UserController::class, 'syncRoles']);

Route::get('/', function () {
    return view('welcome');
});
