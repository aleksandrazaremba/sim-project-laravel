<?php

namespace App\Http\Controllers;

use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facased\Auth;

class SitesController extends Controller
{
    public function __construct()//zabezpieczenie logowania, przekierowuje add na login
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sites = Site::all(); //pobranie rekordów
        return view('sites.index', compact('sites'));
    }

    public function add()
    {
        return view('sites.add');
    }

    public function save(Request $request)   //zapisywanie
    {
        //dd($request->all());//debuguje to co siedzi w request
        //metoda 1
        // $site = new Site();
        // $site->title = $request->input('title');
        // $site->description = $request->input('description');
        // $site->save();
        //metoda 2:
        Site::create($request->all());
        return view('sites.save');
    }

    public function show(Site $site)//musimy zatypować że$site jest typu Site żeby uzyskać dostęp do pełnej wartości
    {
        return view('sites.show', compact('site')); //compact()przekazuje metodę
    }

    public function listofusers()
    {
        $users = User::where('type', 'patient')->get();
        return view('sites.listofusers', compact('users'));
    }

    public function userprofile(User $user)
    {
        $class = $this->classify($user);

        return view('sites.userprofile', compact('user', 'class'));
    }

    public function myprofile()
    {
        return view('sites.myprofile');
    }

    private function classify($user)
    {
        $class = -1;
        $afc = $user->afc;
        $amh = $user->amh;
        $homem_tem_filhos = $user->homem_tem_filhos;
        $idadeelementofeminino = $user->idadeelementofeminino;
        $m_etnia = $user->m_etnia;
        $m_tabaco = $user->m_tabaco;
        $mulher_tem_filhos = $user->mulher_tem_filhos;

        /*Terminal Node 1*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 5 || $m_etnia == 6) && $amh <= 1.24909) {
            //terminalNode = 1;
            $class = 0;
        }

        /*Terminal Node 2*/
        if (($m_etnia == 3 ||$m_etnia == 4) && $amh <= 1.24909) {
            //terminalNode = 2;
            $class = 1;
        }

        /*Terminal Node 3*/
        if ($afc <= 10.50000 && $amh > 1.24909 && $amh <= 1.47585) {
            // terminalNode = 3;
            $class = 0;
        }

        /*Terminal Node 4*/
        elseif ($afc <= 10.50000 && $amh > 1.47585 && $amh <= 1.80207) {
            //terminalNode = 4;
            $class = 1;
        }

        /*Terminal Node 5*/
        if ($afc <= 10.50000 &&  $amh > 1.80207 && $amh <= 4.04339) {
            //terminalNode = 5;
            $class = 0;
        }

        /*Terminal Node 6*/
        if ($afc <= 10.50000 && $amh > 4.04339) {
            //terminalNode = 6;
            //class = 1;
        }

        /*Terminal Node 7*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 1.24909 && $amh <= 3.61561) {
            //terminalNode = 7;
            $class = 1;
        }

        /*Terminal Node 8*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 3.61561 && $amh <= 3.80646) {
            //terminalNode = 8;
            $class = 0;
        }

        /*Terminal Node 9*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $afc > 10.50000 && $idadeelementofeminino <= 39.50000 && $amh > 3.80646 && $amh <= 5.33774) {
            //terminalNode = 9;
            $$class = 1;
        }

        /*Terminal Node 10*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $amh > 5.33774 && $afc > 10.50000 && $afc <= 18.50000 && $idadeelementofeminino <= 35.50000) {
            //terminalNode = 10;
            $class = 1;
        }

        /*Terminal Node 11*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $amh > 5.33774 && $afc > 10.50000 && $afc <= 18.50000 && $idadeelementofeminino > 35.50000 && $idadeelementofeminino <= 39.50000) {
            //terminalNode = 11;
            $class = 0;
        }

        /*Terminal Node 12*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $idadeelementofeminino <= 39.50000 && $amh > 5.33774 && $afc > 18.50000 && $afc <= 22.50000) {
            //terminalNode = 12;
            $class = 0;
        }

        /*Terminal Node 13*/
        if (($m_etnia == 1 || $m_etnia == 2 || $m_etnia == 3 || $m_etnia == 4 || $m_etnia == 6) && $idadeelementofeminino <= 39.50000 && $amh > 5.33774 && $afc > 22.50000) {
            //terminalNode = 13;
            $class = 1;
        }

        /*Terminal Node 14*/
        if (($m_etnia == 5) &&$amh > 1.24909 && $afc > 10.50000 && $idadeelementofeminino <= 39.50000) {
            //terminalNode = 14;
            $class = 1;
        }

        /*Terminal Node 15*/
        if ($amh > 1.24909 && $afc > 10.50000 && $idadeelementofeminino > 39.50000) {
            //terminalNode = 15;
            $class = 0;
        }

        return $class;
    }
}
