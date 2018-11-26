<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class EditprofileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editprofile()
    {
        $user = User::find(Auth::user()->id);
        return view('users.editprofile', ["user" => $user]);
    }

    public function saveeditprofile(Request $input)
    {
        $this->validate($input, [
        'name' => 'required|max:255',
        'password' => 'min:6|confirmed'
            ]);

        $user = User::find(Auth::user()->id);
        $user->name = $input["name"];
        $user->sex = $input["sex"];
        $user->type = $input["type"];
        $user->address = $input["address"];
        $user->location = $input["location"];
        $user->citizennumber = $input["citizennumber"];
        $user->dateofbirth = $input["dateofbirth"];
       

        if ($input->has('password')) {
            $user->password = bcrypt($input['password']);
        }
        $user->save();

        return redirect('edit-profile');
    }


    // public function destroy(User $user)
    // {
    //     User::where('id', $id)->delete();
    //     return redirect()->back();
    // }

    // public function destroy(User $user)
    // {
    //     User::where('id', $id)->delete();
    //     return redirect('listofusers');
    // }
}
