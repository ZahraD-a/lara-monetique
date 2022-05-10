<?php

namespace App\Models;

use App\Models\Boutique;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = [
        'reference', 'dateFact', 'montant','status', 'boutique_id'
    ];

    public function boutique()
    {
    return $this->belongsTo(Boutique::class);
   }
}
