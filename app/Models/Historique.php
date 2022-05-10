<?php

namespace App\Models;

use App\Models\User;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Historique extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',

    ];
    public function commands()
    {
        return $this->belongsTo(Commande::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);// il faut add s to function at the end
    }
}
