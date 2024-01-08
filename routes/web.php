<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

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
    return view('home');
})->name('home');


// Route::get('/comic/{id}', function ($id) {
//     $comics = config('comics.comics');

//     if ($id >= 0 && $id < count($comics)) {
//         $comic = $comics[$id];

//         return view('show', compact('comic'));
//     } else {
//         abort(404);
//     }
// })->name('show');

Route::resource('comics', ComicController::class);
