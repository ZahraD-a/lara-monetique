<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagename',
        'produit_id'
    ];
    public function produits()
    {
       return $this->belongsTo(Produit::class);
    }
}