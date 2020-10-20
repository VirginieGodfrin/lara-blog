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
    $utilisateur = new App\Utilisateur();
    $utilisateur->email = request('email');
    $utilisateur->mot_de_passe = request('password');
    
    $utilisateur->save();

    return 'Votre mail est ' . request('email');
});

//Route::get('/utilisateur', [Controller::class, 'AuthorizesRequests']);

Route::get('posts/{post}/comments/{comment?}', function($postId, $commentId = null){
    return 'post '.$postId.' comment '.$commentId;
});

Route::get('/user/{name}', function($name){
    return 'User '.$name;
})->where('name', '[A-Za-z]+');

//Route::get('/user/{name}/{id}', function($name, $id){
//    return 'User '.$name.'-'.$id;
//})->where(['name'=> '[A-Za-z]+]', 'id' => '[0-9]+']);

Route::get('user/{id}/{name}', function ($id, $name) {
    return 'User '.$name.'-'.$id;
});

Route::get('search/{search}', function ($search) {
    return $search;
})->where('search', '.*');

// Named route
Route::get('user/{$id}/profile', function () {
    //
})->name('profile');

Route::get('user/profile', [UserProfileController::class, 'show'])->name('profile');


//Route::middleware(['first', 'second'])->group(function () {
//    Route::get('/', function () {
//        // Uses first & second middleware...
//    });
//
//    Route::get('user/profile', function () {
//        // Uses first & second middleware...
//    });
//});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        $route = Route::current();
        dump($route);
        $name = Route::currentRouteName();
        dump($name);
//        $action = Route::currentRouteAction();
//        dump($action);
        return 'Hello admin user profile';
    });
});
