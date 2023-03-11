<?php

use App\Http\Controllers\MonitorController;
use App\Http\Controllers\DetectorController;
use App\Http\Controllers\XendataController;
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



    /* DETECTOR */
    /* almacenamiento de registro */
    Route::post('/detectores', [DetectorController::class, 'store'])->name('detector.store');
    /* urL de la data el listado by ajax  JSON*/
    Route::get('/datatables/detector', [DetectorController::class, 'datadetector'])->name('detector.data');
    /* Vista del listado de detecciones */
    Route::get('/listadoDT', [MonitorController::class, 'vistaDetector'])->name('monitoreo.listadoDT');

    /* OPERATIVO */
    Route::get('/list_operativo', [OperacionController::class, 'listadocvm'])->name('operativo.listado');

    /* XENDATA */
    /* almacenamiento de registro */
    Route::post('/xendatasave', [XendataController::class, 'store'])->name('xendata.store');
    /* urL de la data el listado by ajax  JSON*/
    Route::get('/datatables/xendata', [XendataController::class, 'dataxendata'])->name('xendata.data');
    /* Vista del listado de detecciones */
    Route::get('/listadoXD', [MonitorController::class, 'vistaXendata'])->name('monitoreo.listadoXD');

});