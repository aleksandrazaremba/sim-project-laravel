<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editprofile()
    {
        // $user = Auth::user();
        return view('users.editprofile');
    }

    public function update(Request $request, $id)
    {
        User::create($request->all());
        $User = User::with('users')->find($id);
        if (!$User) {
            return response('User not found', 404);
        }

        $Users = $User->users;
        if (!$Users) {
            $Users = new Users();
            $Users->id = $id;
            $Users->save();
        }

        try {
            $values = Input::only($Users->getFillable());
            $Users->update($values);
        } catch (Exception $ex) {
            return response($ex->getMessage(), 400);
        }
    }
}
