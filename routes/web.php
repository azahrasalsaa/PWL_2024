<?php

use App\Http\Controllers\controllerPage;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
 return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});
   
Route::get('/', function () {
    return 'Welcome';
});

Route::get('/about', function () {
    return 'Name: Azahra Salsabila <br> NIM:2241720073';
});

Route::get('/user/{name}', function ($name) {
    return 'My name is '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Article Page with ID '.$id;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'My name is '.$name;
});
    
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/home', [controllerPage::class,'home']);
// Route::get('/about', [controllerPage::class,'about']);
// Route::get('/articles', [controllerPage::class,'articles']); 

Route::get('/home', [controllerPage::class,'home']);
Route::get('/about', [controllerPage::class,'about']);
Route::get('/articles/{$id}', [controllerPage::class,'articles']); 

// use App\Http\Controllers\PhotoController; 
// Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([ 
//     'index', 'show' 
//     ]); 
Route::resource('photos', PhotoController::class)->except([ 
    'create', 'store', 'update', 'destroy' 
]);

// Route::get('/greeting', function () { 
//     return view('hello', ['name' => 'Zara']); 
// });

Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Zara']); 
}); 

Route::get('/greeting', [WelcomeController::class, 
'greeting']); 