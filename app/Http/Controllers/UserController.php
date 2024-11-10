<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $profile = $user->profile; // Access the user's profile
        dd($profile);

        $profile = Profile::find(1);
        $user = $profile->user; // Access the profile's user

    }
}
