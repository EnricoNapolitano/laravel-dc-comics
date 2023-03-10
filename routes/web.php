<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    return view('home');
})->name('home');


//Code below creates all the routes
//Route::resource('comics', ComicController::class);


//Route for comics' list
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

//Route to create
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

//Route to storage
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//Route to edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//Route for specific comic
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//Rout to update
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');

//Rout to delete comic's data from database
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');