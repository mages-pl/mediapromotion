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
        'name', 'email', 'password',
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
Użytkownik posiada sklep
    */
    public function shop() {   // wczesniej sklepy
        return $this->hasOne("App\Shop");
    }

    /* Użytkownik posiada ustawienia */
    public function setting() { 
        return $this->hasOne("App\Setting");
    }

  /* Sklep posiada promocje */
     public function promocje() { 
        return $this->hasMany("App\Promotion");
    }
    
}
