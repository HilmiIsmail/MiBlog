<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BlogController;
use App\Models\Autor;
use App\Models\Blog;
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
    $blogs = Blog::with('autor')->orderBy('id', 'desc')->paginate(6); // autor refiere a la function autor() en Blog
    return view('welcome', compact('blogs'));
})->name('home');


Route::resource('blogs', BlogController::class);
Route::resource('autores', AutorController::class);
