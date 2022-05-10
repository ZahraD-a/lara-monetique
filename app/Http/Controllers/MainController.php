<?php

namespace App\Http\Controllers;
use Validator;
use Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index(){
        return view('auth.login');
    }


    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
        if(auth()->user()->type=="admin superieur"){

            return view('Admin.welcome');
        }else{
            return view('home');

         }
         }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
     return view('home');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}

?>
