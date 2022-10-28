<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador_V;

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

Route:: get(('Formulario'), [Controlador_V::class, 'ShowFormulario'])->name('Vform');

Route:: get(('Tabla'), [Controlador_V::class, 'ShowTabla'])->name('Vtable');

Route::post('GuardarPedido', [Controlador_V::class, 'Procesador'])->name('Save');
