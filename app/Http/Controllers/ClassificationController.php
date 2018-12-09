<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DB;

class ClassificationController extends Controller
{
    public function boot()
    {
        Blade::withoutDoubleEncoding();
    }

    public function show()
    {
        $user = DB::select('select * from users');
        return view('test', ['users'=>$user]);
    }


    public function classificasions($id, $afc, $amh, $homem_tem_filhos, $idadeelementofeminino, $m_etnia, $m_tabaco, $mulher_tem_filhos, $classificated, $notclassificated)
    {
        $afc = DB::select('select afc from users', [$id]);
        $amh = DB::select('select amh from users', [$id]);
        $homem_tem_filhos = DB::select('select homem_tem_filhos from users', [$id]);
        $idadeelementofeminino = DB::select('select idadeelementofeminino from users', [$id]);
        $m_etnia = DB::select('select m_etnia from users', [$id]);
        $m_tabaco = DB::select('select m_tabaco from users', [$id]);
        $mulher_tem_filhos = DB::select('select mulher_tem_filhos from users', [$id]);
        $user = DB::select('select * from users', [$id]);
        // $user = User::findOrFail($id);
        $classificated = "Recommended for treatment"; //$class==0
        $notclassificated = "No need for treatment"; // 1
        // $afc = $request->afc;
        // $amh = $request->amh;
        // $homem_tem_filhos = $request->homem_tem_filhos;
        // $idadeelementofeminino = $request->idadeelementofeminino;
        // $m_etnia = $request->m_etnia;
        // $m_tabaco = $request->m_tabaco;
        // $mulher_tem_filhos = $request->mulher_tem_filhos;
        // $user = $request->user;
        // // $user = User::findOrFail($id);
        // $classificated = "Recommended for treatment"; //$class==0
        // $notclassificated = "No need for treatment"; // 1

        // function classification($afc, $amh, $homem_tem_filhos, $idadeelementofeminino, $m_etnia, $m_tabaco, $mulher_tem_filhos, $classificated, $notclassificated)
        // {
        /*Terminal Node 1*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 5 || $m_etnia == 6) && $amh <= 1.24909) {
            //terminalNode = 1;
            //$class = 0;
            return $classificated;
        }

        /*Terminal Node 2*/
        elseif (($m_etnia == 3 ||$m_etnia == 4) && $amh <= 1.24909) {
            //terminalNode = 2;
            //$class = 1;
            return $notclassificated;
        }

        /*Terminal Node 3*/
        elseif ($afc <= 10.50000 && $amh > 1.24909 && $amh <= 1.47585) {
            // terminalNode = 3;
            return $classificated;
        }

        /*Terminal Node 4*/
        elseif ($afc <= 10.50000 && $amh > 1.47585 && $amh <= 1.80207) {
            //terminalNode = 4;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 5*/
        elseif ($afc <= 10.50000 &&  $amh > 1.80207 && $amh <= 4.04339) {
            //terminalNode = 5;
            //class = 0;
            return $classificated;
        }

        /*Terminal Node 6*/
        elseif ($afc <= 10.50000 && $amh > 4.04339) {
            //terminalNode = 6;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 7*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 1.24909 && $amh <= 3.61561) {
            //terminalNode = 7;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 8*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 3.61561 && $amh <= 3.80646) {
            //terminalNode = 8;
            //class = 0;
            return $classificated;
        }

        /*Terminal Node 9*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 3.80646 && $amh <= 5.33774) {
            //terminalNode = 9;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 10*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $amh > 5.33774 && $afc > 10.50000 && $afc <= 18.50000 && $idadeelementofeminino <= 35.50000) {
            //terminalNode = 10;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 11*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $amh > 5.33774 && $afc > 10.50000 && $afc <= 18.50000 && $idadeelementofeminino > 35.50000 && $idadeelementofeminino <= 39.50000) {
            //terminalNode = 11;
            //class = 0;
            return $classificated;
        }

        /*Terminal Node 12*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $idadeelementofeminino <= 39.50000 && $amh > 5.33774 && $afc > 18.50000 && $afc <= 22.50000) {
            //terminalNode = 12;
            //class = 0;
            return $classificated;
        }

        /*Terminal Node 13*/
        elseif (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $idadeelementofeminino <= 39.50000 && $amh > 5.33774 && $afc > 22.50000) {
            //terminalNode = 13;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 14*/
        elseif (($m_etnia == 5) &&$amh > 1.24909 && $afc > 10.50000 && $idadeelementofeminino <= 39.50000) {
            //terminalNode = 14;
            //class = 1;
            return $notclassificated;
        }

        /*Terminal Node 15*/
        elseif ($amh > 1.24909 && $afc > 10.50000 && $idadeelementofeminino > 39.50000) {
            //terminalNode = 15;
            //class = 0;
            return $classificated;
        }
        // }


        return redirect('test', ['user'=>$user]);
    }
}
