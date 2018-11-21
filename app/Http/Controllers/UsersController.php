<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Site;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editprofile(User $user)
    {
        return view('users.editprofile', compact('user'));
    }
}
