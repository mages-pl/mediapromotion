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

        return $this->belongsTo("App/User");
    }
}
