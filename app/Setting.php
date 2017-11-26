<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
   protected $fillable = [
           'nazwa_firmy',
           'adres_firmy',
'miasto_firmy',
'kod_pocztowy_firmy',
'telefon_firmy',
'nip_firmy',
'regon_firmy'
    ];
 

    /*
Ustawienia należą do użytkownika 
*/
    public function user() { 
        return $this->hasOne("App\User");
    }
}
