<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [
        'nazwa_kategorii',
        'tag_kategorii',
        'id_glownej_kategorii',
        'status_kategorii',
        'glowna'
    ];
}
