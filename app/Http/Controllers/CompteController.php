<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function accueil (){

        var_dump(auth()->check());
         if(auth()->check()){
             return redirect ('/admin-cmpt')->withErrors([

             ]);
         }

        return view('admin-cmpt');
    }
}
