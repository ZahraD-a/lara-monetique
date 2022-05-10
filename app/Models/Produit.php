<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_id',
        'name',
        'category',
        'description',
        'status',
        'prix'
    ];

    public function commandes(){
        return $this->belongsToMany(Commande::class)->withpivot('quantite');;
    }
    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
