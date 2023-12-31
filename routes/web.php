<?php

use App\Http\Controllers\ComunaController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PaisController;
use App\Models\Pais;
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
route::post('/departamentos', [DepartamentoController::class,'store'])->name('departamentos.store');
route::get('/departamentos/create', [DepartamentoController::class,'create'])->name('departamentos.create');
route::delete('/departamentos/{departamento}', [DepartamentoController::class,'destroy'])->name('departamentos.destroy');
route::put('/departamentos/{departamento}', [DepartamentoController::class,'update'])->name('departamentos.update');
route::get('/departamentos/{departamento}/edit', [DepartamentoController::class,'edit'])->name('departamentos.edit');

route::get('/paises', [PaisController::class,'index'])->name('paises.index');
route::post('/paises', [PaisController::class,'store'])->name('paises.store');
route::get('/paises/create', [PaisController::class,'create'])->name('paises.create');
route::delete('/paises/{pais}', [PaisController::class,'destroy'])->name('paises.destroy');
route::put('/paises/{pais}', [PaisController::class,'update'])->name('paises.update');
route::get('/paises/{pais}/edit', [PaisController::class,'edit'])->name('paises.edit');

