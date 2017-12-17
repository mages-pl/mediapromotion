<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable = [
        'nazwa_promocji',
        'opis_promocji',
          'wartosc_promocji',
         'kod_promocji',
       'promocja_od',
         'promocja_do'
            
    ];

/*
User posiada promocje
*/
     public function user() { 
         return $this->belongsTo("App\User");
     }
 
/*Promocje posiadają typ promocji */
public function promotiontype() { 
        return $this->hasMany("App\PromotionType");
    }
}