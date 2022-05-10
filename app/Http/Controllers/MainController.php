<?php

namespace App\Http\Controllers;
use Auth;
use Validator;
use App\Models\Produit;
use App\Models\Etudiant;
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

            $etudiants = Etudiant::All();
            return view('Admin.welcome', compact('etudiants'));
        }else{
            $produits = Produit::All();
            return view('home', compact('produits'));

         }
         }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }

    function successlogin()
    {
        $produits = Produit::All();
        return view('home', compact('produits'));
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}

?>
