<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //Extract
    //Incapsulate
    //Abstract = Generalizzare

    //Restituiscimi la hompeage (welcome)
    public function home() {
        //Restituisci una vista che è presente all'interno del percorso resources\views e che ha nome corrispondente a "welcome"
        //il metodo view ha il solo compito di andare all'interno del folder resources\views e crecare una vista che corrisponde a ciò che gli è stato specificato come parametro
        return view('welcome');
    }
}
