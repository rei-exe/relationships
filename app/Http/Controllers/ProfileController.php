<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function showAllUsers()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }
}
