<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

       return view('admin.users.list');
    }
    public function home()
    {
       $etudiants = Etudiant::all();;
       return view('admin.welcome', compact('etudiants'));
    }
    public function show()
    {
        $users = DB::select('select * from users
                             where type="user boutique "');// errors not  found if you don't dclare this users
        return view('Admin.users.list', ['users' => $users]);


    }
}
