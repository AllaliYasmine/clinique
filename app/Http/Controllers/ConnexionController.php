<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
    {
        return view('index');
    }

    public function traitement()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
    
        // À faire : vérification que l'email et le mot de passe sont corrects.
    
        return 'Traitement formulaire connexion';
    }
}
