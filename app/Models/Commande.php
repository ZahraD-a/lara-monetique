<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Produit;
use App\Models\Boutique;
use App\Models\Etudiant;
use App\Models\Historique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantite',

    ];

    public function posts(){
        return $this->belongsToMany(Produit::class,'commande_produit');
    }
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
    public function boutique()
    {
        return $this->belongsTo(Boutique::class);
    }
    public function produits()
    {
        return $this->belongsToMany(Produit::class)->withpivot('quantite');
    }
    public function historique()
    {
        return $this->hasMany(Historique::class);
    }
}
