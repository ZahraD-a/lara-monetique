<?php

namespace App\Models;

use App\Models\Boutique;
use App\Models\Commande;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant', 'datePay', 'etudiant_id',
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
    public function boutique()
    {
    return $this->belongsTo(Boutique::class);// not used
   }
   public function commande()
    {
    return $this->belongsTo(Commande::class);// not used
   }
}
