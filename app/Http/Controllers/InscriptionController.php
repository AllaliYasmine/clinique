<?php

namespace App\Http\Controllers;

use App\utilisateur;

class InscriptionController extends Controller
{
    public function formulaire(){

        return view('inscription');
    }

    public function traitement(){

        request()->validate([
            'username'=>['required'],
            'specialty'=>['required'],
            'email'=>['required','email'],
            'password'=>['required','confirmed'],
            'password_confirmation'=>['required'],
    
        ]);
    
        $utilisateur= new utilisateur;
        $utilisateur->username = Request('username');
        $utilisateur->specialty = Request('specialty');
        $utilisateur->email = Request('email');
        $utilisateur->password = Request('password');
        
    
        $utilisateur->save();
    
        return 'Formulaire reçu' ;
    
    }
}
