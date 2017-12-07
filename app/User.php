<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','rola_uzytkownika'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
Użytkownik posiada jeden sklep
    */
    public function shop() {   // wczesniej sklepy
        return $this->hasOne("App\Shop");
    }

    /* Użytkownik posiada jedno ustawienia */
    public function setting() { 
        return $this->hasOne("App\Setting");
    }

  /* Uzytkwonik ma wiele promocji */
     public function promocje() { 
        return $this->hasMany("App\Promotion");
    }

    // Uzytkownik ma wiele faktur
    public function faktury() {
        return $this->hasMany("App\Invoice");
    }

    // Uzytkownik ma jedna role
    public function roles() {
        return $this->belongsTo("App\Role");
    }
}
