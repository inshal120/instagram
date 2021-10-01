<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findorfail($user);
        return view('home')->with('user',$user);
    }
}
