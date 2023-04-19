<?php

use App\Http\Controllers\ComicController;
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
    $data = [
        'page_title' => 'Home'
    ];
    return view('welcome', $data);
})->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
Route::post('/comics/store', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

// Route::resource('comics', ComicController::class); mi permette di fare in automatico tutte le rotte che stanno sopra min 28 
//migration ->seeder-> controller -> registrare rotte  
// per creare tutti i file php artisan make:model Comic -a
// nel controller che crea nella sezione store e update devosostituire ad UpdateComicRequest Request ed importarla sopra
// se ho più seeder invece di invocarli uno per uno uso DatabaseSeeder     min -29  80b
// per buttare giu le tabelle  ricrearle e rilanciare databaseSeeder lancioda terminale php artisan migrate:fresh --seed