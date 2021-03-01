<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjouterPatientController extends Controller
{


    public function formulaire (){
        return view('addpat');
    }
    public function traitement(){

    $patient= new \App\patient;

    $patient->first_name = Request('First name');
    $patient->last_name = Request('last name');
    $patient->num = Request('numéro de sécurité sociale');
    $patient->date = Request('date de naissance');
    $patient->numtel = Request('Numéro de tel');
    $patient->address = Request('Address');
    $patient->email = Request('email');
    

    

    $patient_tab->save();

    return "patient enregistrer :";


    }
}
