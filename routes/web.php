<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
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

route::get('/comunas', [ComunaController::class,'index'])->name('comunas.index');
route::post('/comunas', [ComunaController::class,'store'])->name('comunas.store');
route::get('/comunas/create', [ComunaController::class,'create'])->name('comunas.create');
route::delete('/comunas/{comuna}', [ComunaController::class,'destroy'])->name('comunas.destroy');
route::put('/comunas/{comuna}', [ComunaController::class,'update'])->name('comunas.update');
route::get('/comunas/{comuna}/edit', [ComunaController::class,'edit'])->name('comunas.edit');
route::get('/municipios', [MunicipioController::class,'index'])->name('municipios.index');
route::post('/municipios', [MunicipioController::class,'store'])->name('municipios.store');
route::get('/municipios/create', [MunicipioController::class,'create'])->name('municipios.create');
route::delete('/municipios/{municipio}', [MunicipioController::class,'destroy'])->name('municipios.destroy');
route::put('/municipios/{municipio}', [MunicipioController::class,'update'])->name('municipios.update');
route::get('/municipios/{municipio}/edit', [MunicipioController::class,'edit'])->name('municipios.edit');
route::get('/departamentos', [DepartamentoController::class,'index'])->name('departamentos.index');



