<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'nazwa_sklepu',
        'opis_sklepu',
        'xml_sklepu',
        'logo_sklepu',
        'link_sklepu' 
        // 'user_id'
        
    ];
/*
Sklep posiada właściciela
*/
    public function user() { 
        return $this->hasOne("App\User");
    }

  


}
