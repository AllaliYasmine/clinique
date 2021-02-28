<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('stat', function () {
    return view('stat');
});

Route::get('pat', function () {
    return view('pat');
});

Route::get('ordo', function () {
    return view('ordo');
});


Route::get('addpat', function () {
    return view('addpat');
});

Route::post('/addpat', function () {

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
    
        return "patient enregistrer :"; 
});

Route::get('/serc', function () {
    return view('secr');
});

Route::get('/inscription', 'InscriptionController@formulaire');

Route::post('/inscription','InscriptionController@traitement');

Route::get('/secr','UtilisateursController@liste');

Route::get('/connexion', 'ConnexionController@formulaire');

Route::post('/connexion','ConnexionController@traitement');

Route::get('/admin-cmpt','CompteController@accueil');




Route::get('doc', function () {
    return view('doc');
});
Route::post('doc', function () {
    return "nous avont reçu votre email qui est :". request('email'); 

});
