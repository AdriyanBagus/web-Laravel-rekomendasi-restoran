<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\SpkController;
use App\Models\Restoran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoranController;

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
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tambahadmin', function () {
    return view('tambahadmin');
});

Route::get('/spk', function () {
    return view('spk');
});

Route::get('/hitung',[SpkController::class,'hitung'])->name('hitung');

Route::get('/form', function () {
     return view('form');
 });

Route::get('/tampil', function () {
    $data = Restoran::orderBy('id','asc')->get();
    return view('tampil')->with('data', $data);
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::controller(authController::class)->group(function () {
    Route::get('/login', 'login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

Route::get('/edit/{id}', function () {
    return view('edit');
});

Route::get('/product', function () {
    $data = Restoran::orderBy('id','asc')->get();
    return view('tabeladmin')->with('data', $data);
});


// Route::get('form', [RestoranController::class, 'index'])->name('form.index');
Route::post('/form/store', [RestoranController::class, 'store'])->middleware();
Route::get('/product/{id}/edit', [RestoranController::class, 'edit']);
Route::post('/product/{id}/update', [RestoranController::class, 'update']);
Route::get('/product/{id}/delete', [RestoranController::class, 'destroy']);
// Route::post('form', [RestoranController::class, 'store'])->name('form.store');
// Route::resource('/form', RestoranController::class);