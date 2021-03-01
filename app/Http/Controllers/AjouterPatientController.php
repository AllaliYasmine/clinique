<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterPatientController extends Controller
{


    public function formulaire (){
        return view('addpa');
    }
    public function traitement(){

        $patient= new App\patient;
        $patient->first_name = Request('first name');
        $patient->last_name = Request('last name');
        $patient->Date_of_Birth = Request('Date of Birth');
        $patient->sex = Request('sex');
        $patient->Contact_Number = Request('Contact Number');
        $patient->numéro_de_sécurité_sociale = Request('numéro de sécurité sociale');
        
        $patient->email = Request('email');
        $patient->Address = Request('Address');

        $patient->Maladies_Chroniques = Request('Maladies Chroniques');
        $patient->antécédents = Request('antécédents');

        $patient->Allergie = Request('Allergie');
        $patient->commentaires = Request('commentaires');
        
    
        $patient->save();
    
        return "Patient Enregistrer :"; 


    }
}
