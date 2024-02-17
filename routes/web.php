<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMe;
use App\Http\Controllers\Skills;
use App\Http\Controllers\Hobbies;

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

Route::get('/about',[
    AboutMe::class, 'index'
]);

Route::get('/skills',[
    Skills::class, 'index'
]);


Route::get('/hobbies',[
    Hobbies::class, 'index'
]);


