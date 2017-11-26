<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function kontakt() {
        $tytul = "Skontaktuj się";
        $email = "michal.jendraszczy@gmail.com";
        $tel = "123123123";
        return view("pages.kontakt",compact('tytul','email','tel'));
    }
 public function integracja() {
        echo "integracja";
    }
}
