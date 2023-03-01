<?php

use App\Http\Controllers\MonitorController;
use App\Http\Controllers\DetectorController;
use App\Http\Controllers\OperacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('monitoreo', MonitorController::class);
    Route::resource('operacion', OperacionController::class);

    /* Prueba */
    Route::get('/formulario', [DetectorController::class, 'index'])->name('detector.index');
    /* almacenamiento de registro */
    Route::post('/detectores', [DetectorController::class, 'store'])->name('detector.store');
    /* Vista del listado de detecciones */
    Route::get('/listado', [DetectorController::class, 'listado'])->name('detector.listado');
    /* urL de la data el listado by ajax */
    Route::get('/datatables/detector', [DetectorController::class, 'datadetector'])->name('detector.data');
    
    Route::get('/list_operativo', [OperacionController::class, 'listadocvm'])->name('operativo.listado');

});