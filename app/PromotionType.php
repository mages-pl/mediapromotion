<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionType extends Model
{
    //
/*
Typ promocji posiadają promocje
*/
        public function promotion() { 
        return $this->belongsTo("App\Promotion");
    }
}
