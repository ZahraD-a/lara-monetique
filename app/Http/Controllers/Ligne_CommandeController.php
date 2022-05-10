<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Commande;
use App\Models\LigneCommand;
use Illuminate\Http\Request;
use App\Models\commande_produit;
use Illuminate\Support\Facades\DB;

class Ligne_CommandeController extends Controller
{


public function show(Commande $commande){
    return View('form.LigneCommand',['commande'=>$commande]);
}


 public function index()
    {
       $commandes = Commande::all();
       return view('form.LigneCommand', ['commandes' => $commandes]);
    }

}
