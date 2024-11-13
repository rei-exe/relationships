<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile(Request $request)
    {
        $user = User::with('profile')->find($request->id);
        return view('user-profile', ['user' => $user]);
    }

    public function showCourses(Request $request)
    {
        $user = User::with('courses')->find($request->id);
        $user->courses()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        return view('courses-user', ['user' => $user]);
    }
}
