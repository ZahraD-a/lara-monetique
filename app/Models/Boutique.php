<?php

namespace App\Models;

use App\Models\User;
use App\Models\Facture;
use App\Models\Commande;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Boutique extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'name' ,'if', 'cfe', 'image','user_id','description','timDebut','timeFin'
    ];

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
    public function commands()
    {
        return $this->hasMany(Commande::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function factures()
    {
        return $this->hasMany(Facture::class);
    }


}
