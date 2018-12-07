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

        // $user->afc = $input["afc"];
        // $user->amh = $input["amh"];
        // $user->homem_tem_filhos = $input["homem_tem_filhos"];
        // $user->idadeelementofeminino = $input["idadeelementofeminino"];
        // $user->m_etnia = $input["m_etnia"];
        // $user->m_tabaco = $input["m_tabaco"];
        // $user->mulher_tem_filhos = $input["mulher_tem_filhos"];
        // $user->duracaoinfertilidade = $input["duracaoinfertilidade"];
        // $user->pesoelementofeminino = $input["pesoelementofeminino"];
        // $user->imcelementofeminino = $input["imcelementofeminino"];
        // $user->imcelementomasculino = $input["imcelementomasculino"];
        // $user->idadeelementomasculino = $input["idadeelementomasculino"];
        // $user->f_tabaco = $input["f_tabaco"];
        // $user->f_etnia = $input["f_etnia"];
        // $user->notes = $input["notes"];
       

        if ($input->has('password')) {
            $user->password = bcrypt($input['password']);
        }
        $user->save();

        return redirect('edit-profile');
    }
}
