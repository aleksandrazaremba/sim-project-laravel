<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;

class FertilityController extends Controller
{
    public function edit(User $user)
    {
        return view('fertility.edit', ['user'=>$user]);
    }

    public function save(Request $input)
    {
        $user = User::find($input["userId"]);
      
        $user->afc = $input["afc"];
        $user->amh = $input["amh"];
        $user->homem_tem_filhos = $input["homem_tem_filhos"];
        $user->idadeelementofeminino = $input["idadeelementofeminino"];
        $user->m_etnia = $input["m_etnia"];
        $user->m_tabaco = $input["m_tabaco"];
        $user->mulher_tem_filhos = $input["mulher_tem_filhos"];
        $user->duracaoinfertilidade = $input["duracaoinfertilidade"];
        $user->pesoelementofeminino = $input["pesoelementofeminino"];
        $user->imcelementofeminino = $input["imcelementofeminino"];
        $user->imcelementomasculino = $input["imcelementomasculino"];
        $user->idadeelementomasculino = $input["idadeelementomasculino"];
        $user->f_tabaco = $input["f_tabaco"];
        $user->f_etnia = $input["f_etnia"];
        $user->notes = $input["notes"];
       
        $user->save();

        return view('fertility.edit', ['user'=>$user]);
    }
}
