<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    // User posiada faktury

protected $fillable = [ 
'wartosc_faktury'
];


    public function user() { 
return $this->hasMany('App\User');

    }
}
