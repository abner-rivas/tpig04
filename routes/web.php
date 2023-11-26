<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfertaController;
use App\Http\Controllers\PostuladoController;
use App\Http\Controllers\ApiController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

require __DIR__.'/auth.php';


Route::middleware(['auth.check'])->group(function () {
    //Rutas protegidas van aquí
    Route::controller(OfertaController::class)->group(function(){
        Route::get('/ofertas/editar/{oferta}', 'editar')->name('ofertas.editar');
        Route::put('/ofertas/actualizar/{id}', 'actualizar')->name('ofertas.actualizar');
        Route::delete('/ofertas/eliminar/{id}', 'eliminar')->name('ofertas.eliminar');
        Route::get('/ofertas', 'index')->name('ofertas.index');
        Route::post('/ofertas', 'store')->name('ofertas.store');
        Route::get('/ofertas/crear', 'create')->name('ofertas.crear');
    });

    //Agregar las demas rutas protegidas aquí
    //Route::controller(PostuladoController::class)->group(function(){
        //Route::get('/postulados','consulta')->name('postulados.consulta');
        //Route::put('/postulados/revisar/{id}', 'revisar')->name('postulados.revisar');

    Route::controller(ApiController::class)->group(function(){
        Route::get('/postulados','getData')->name('postulados.getData');
        Route::get('/postulados/revisar/{id}', 'revisar')->name('postulados.revisar');
    });
    
});
