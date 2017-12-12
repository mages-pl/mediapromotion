<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
            'nazwa_produktu',
            'obrazek_produktu',
            'cena_produktu'
    ];

    public function user() {

        return $this->hasMany("App/User");
    }
}
