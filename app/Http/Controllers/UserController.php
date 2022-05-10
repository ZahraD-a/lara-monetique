<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

       return view('form.users');
    }
    public function create()
    {
      $users = User::all() ;
      return view('form.createUser',['users'=>$users,'layout'=>'create']);
    }
}
