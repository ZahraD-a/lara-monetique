<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Compte extends Model
{
    use HasFactory;

    protected $fillable = [
        'num_compte', 'salaire', 'etudiant_id'
    ];
    public function etudiant()
    {
    	return $this->belongsTo(Etudiant::class);
    }
}
