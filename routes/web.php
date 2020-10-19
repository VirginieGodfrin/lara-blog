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
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// var : parametre get
Route::get('/bonjour/{prenom}', function () {
    // var : dans la fonction annonyme
    $prenom = request('prenom');
    return view('bonjour', [
        // var : dans la vue
        'prenom' => $prenom,
    ]);
});

Route::post('/inscription', function(){
    return 'Votre mail est ' . $_POST['email'];
//    return 'Votre mail est ' . request('email');
});