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

Route::get('pat', function () {
    return view('pat');
});


Route::get('connexion', function () {
    return view('connexion');
});
Route::post('connexion', function () {

    $utilisateur= new App\utilisateur;
    $utilisateur->username = Request('username');
    $utilisateur->specialty = Request('specialty');
    $utilisateur->email = Request('email');
    $utilisateur->password = Request('password');

    $utilisateur->save();

    return "nous avont reçu votre email qui est :". request('email'); 
   
});


Route::get('doc', function () {
    return view('doc');
});
Route::post('doc', function () {
    return "nous avont reçu votre email qui est :". request('email'); 
    return 'formulaire reçu';
});

Route::get('secr', function () {
    return view('secr');
});
Route::post('secr', function () {
    return "nous avont reçu votre email qui est :". request('email'); 
    return 'formulaire reçu';
});


Route::get('/', function () {
$utilisateur= new App\utilisateur;
    $utilisateur->username = Request('username');
    $utilisateur->specialty = Request('specialty');
    $utilisateur->email = Request('email');
    $utilisateur->password = Request('password');

    $utilisateur->save();

    return view('secr');
});


Route::get('/','ConnexionController@formulaire');
Route::post('/','ConnexionController@traitement');