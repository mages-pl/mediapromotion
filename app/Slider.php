<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    protected $fillable = [
        'nazwa_slidera',
      //  'obrazek_slidera',
       // 'opis_slidera',
        'status_slidera',
        'link_slidera'
    ];
}
