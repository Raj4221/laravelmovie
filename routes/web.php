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

Route::get('/seat/{id?}',"App\\Http\\Controllers\\ViewController@seat");


Route::get('/home',"App\\Http\\Controllers\\MovieController@index");

Route::get('/book/{id?}',"App\\Http\\Controllers\\ViewController@viewmovietheatre");

Route::resource("movie","App\Http\Controllers\MovieController");
Route::get("/insert","App\\Http\\Controllers\\MovieController@create");
Route::get("/viewmovies","App\\Http\\Controllers\\ViewController@viewmovie");
Route::get("/view_movie_detail/{id?}","App\\Http\\Controllers\\ViewController@viewmoviedetail");


Route::resource("member","App\Http\Controllers\MemberController");
Route::post("/login","App\\Http\\Controllers\\LoginController@login");
Route::get("/logout","App\\Http\\Controllers\\LoginController@logout");


Route::resource("theatre","App\Http\Controllers\TheatreController");
Route::get("/viewtheatre","App\\Http\\Controllers\\ViewController@viewtheatre");
Route::get("/edit_theatre/{id?}","App\\Http\\Controllers\\ViewController@viewtheatredetail");
Route::post("/update_theatre/{id?}","App\\Http\\Controllers\\ViewController@updatetheatredetail");
Route::get("/theatre_delete/{id?}","App\\Http\\Controllers\\ViewController@theatredelete");
Route::get("/theatres/{id?}","App\\Http\\Controllers\\TheatreController@viewtheatre");


Route::resource("actor","App\Http\Controllers\ActorController");
Route::get("/viewactordetail/{id?}","App\\Http\\Controllers\\ViewController@viewactordetail");
Route::get("/actor_delete/{id?}","App\\Http\\Controllers\\ViewController@actordelete");
Route::get("/viewactor","App\\Http\\Controllers\\ActorController@index");


Route::resource("booking","App\Http\Controllers\BookingController");
Route::get('/ticket/{id?}',"App\\Http\\Controllers\\ViewController@view");

Route::post("/search","App\\Http\\Controllers\\ViewController@searchmovie");
//  Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
