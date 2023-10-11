<?php

use App\Http\Controllers\ComunaController;
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

