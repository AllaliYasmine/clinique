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

Route::get('addpa', function () {
    return view('addpa');
});

Route::get('connexion', function () {
    return view('connexion');
});

Route::get('stat', function () {
    return view('stat');
});

Route::get('ordo', function () {
    return view('ordo');
});


Route::get('/cnx', function () {
    return view('cnx');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/', function () {

    $utilisateur= new App\utilisateur;
    $utilisateur->name = Request('name');
    $utilisateur->name = Request('surname');
    $utilisateur->name = Request('specialty');
    
    $utilisateur->email = Request('email');
    $utilisateur->name = Request('password');
    

    $utilisateur->save();

    return 'Formulaire reçu' ;

});


Route::get('doc', function () {
    return view('doc');
});
Route::post('doc', function () {
    return "nous avont reçu votre email qui est :". request('email'); 

});
