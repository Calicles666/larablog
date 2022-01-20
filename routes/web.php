<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\Dashboard\PostController;

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
})->name('home');
Route::get('/about', function () {
    return '<h1>About us...</h1>';
});
Route::get('/hello/{name}/{surname?}', function ($name, $surname = 'NOT PROVIDED') {
    return "<h1>Hello $name $surname</h1>\n Know more about <a href='".route("us")."'>us</a>";
});
Route::get('/about-us', function () {
    return "<h1>All about us is here</h1>";
})->name('us');
Route::get('home/{name?}/{surname?}', function ($name = 'NO NAME', $surname = 'NO SURNAME') {
    //return view('home')->with('name',$name)->with('surname',$surname);
    $posts = ['post1','post2','post3','post4'];
    $posts2 = [];
    return view('home')->with(['name' => $name, 'surname'  => $surname, 'posts' => $posts]);
});

//Route::get('posts', [PostController::class, 'index']);

Route::resource('dashboard/post', PostController::class);
