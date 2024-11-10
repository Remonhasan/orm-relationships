<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::find(1);
        // $profile = $user->profile; // Access the user's profile


        $profile = Profile::find(1);
        $user = $profile->user; // Access the profile's user
        dd($user);
    }

    // Test Assigning Roles to a User
    public function assignRoles($userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        // Check if user exists
        if (!$user) {
            return dd('User not found.');
        }

        // Assign roles (you can use attach with a single or multiple role IDs)
        $user->roles()->attach([1, 2, 3]); // Example: Attach roles with IDs 1, 2, and 3

        // Dump the user with attached roles
        return dd($user->load('roles')); // This will show the user with their roles
    }

    // Test Removing Roles from a User
    public function removeRoles($userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        // Check if user exists
        if (!$user) {
            return dd('User not found.');
        }

        // Get a specific role to detach (or you can detach all)
        $role = Role::find(1); // Assuming you want to detach role with ID 1

        // Remove the role from the user
        $user->roles()->detach($role); // Detach a specific role

        // Or detach all roles:
        // $user->roles()->detach(); // Detach all roles

        // Dump the user with the remaining roles
        return dd($user->load('roles'));
    }

    // Test Syncing Roles for a User
    public function syncRoles($userId)
    {
        // Find the user by ID
        $user = User::find($userId);

        // Check if user exists
        if (!$user) {
            return dd('User not found.');
        }

        // Sync roles (this will remove all current roles and only keep roles with IDs 1 and 2)
        $user->roles()->sync([1, 2]);

        // Dump the user with the synced roles
        return dd($user->load('roles'));
    }
}
