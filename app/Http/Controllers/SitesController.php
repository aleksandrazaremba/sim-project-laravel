<?php

namespace App\Http\Controllers;

use App\Site;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facased\Auth;

class SitesController extends Controller
{
    //zabezpieczenie logowania, przekierowuje add na login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //pobranie rekordów
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }

    public function add()
    {
        return view('sites.add');
    }

    //zapisywanie
    public function save(Request $request)
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

    //musimy zatypować że$site jest typu Site żeby uzyskać dostęp do pełnej wartości
    public function show(Site $site)
    {
        //dd($site);
        return view('sites.show', compact('site'));
    }
    //compact()przekazuje metodę


    public function listofusers()
    {
        $users = User::all();
        return view('sites.listofusers', compact('users'));
    }

    public function userprofile(User $user)
    {
        return view('sites.userprofile', compact('user'));
    }

    public function myprofile()
    {
        return view('sites.myprofile');
    }
}
