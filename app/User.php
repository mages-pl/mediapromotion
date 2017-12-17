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
        'name', 'email', 'password','role_id', 'status_uzytkownika'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
public function slider() { 

    return $this->hasMany("App\Slider");
}
    /*
Użytkownik posiada jeden sklep
    */
    public function shop() {   
        return $this->hasOne("App\Shop");
    }

    /* Użytkownik posiada jedno ustawienia */
    public function setting() { 
        return $this->hasOne("App\Setting");
    }

  /* Promocje ma uzytkownik  */
     public function promotion() { 
        return $this->hasMany("App\Promotion");
    }

    // Uzytkownik ma wiele faktur
    public function invoice() {
        return $this->hasMany("App\Invoice");
    }

    // Uzytkownik ma jedna role
    public function role() {
        return $this->belongsTo("App\Role");
    }
}
