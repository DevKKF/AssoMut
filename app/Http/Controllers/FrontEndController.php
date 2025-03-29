<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //Page d'accueil
    public function Accueil(Request $request){
        return view('frontend.accueil');
    }

    //Page de contact
    public function Contact(Request $request){
        return view('frontend.contact');
    }
}
