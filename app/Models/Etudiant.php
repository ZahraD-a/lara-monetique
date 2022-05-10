<?php

namespace App\Models;

use App\Models\Compte;
use App\Models\Commande;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Etudiant extends Model
{
    use Notifiable;
    protected $fillable = [
        'CNE', 'nom', 'prenom','image', 'user_id','CIN','num_compte','solde'
    ];

    //protected $guarded = []; //insert all field

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //etud has many commande
    public function commands()
    {
        return $this->hasMany(Commande::class);
    }
    public function compte()
    {
    return $this->hasOne(Compte::class);// not used
   }
   public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function latestTransaction()
    {
        return $this->hasMany(Transaction::class)->latest()->take(1);
    }
    public function increaseBalance($solde)
    {
        $currentsolde=$this->solde;
        $this->update(['solde'=> $currentsolde +$solde]);
    }
}
