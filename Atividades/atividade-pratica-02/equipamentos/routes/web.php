<?php

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
use App\Http\Controllers\EquipamentoController;
Route::get('/', [EquipamentoController::class, 'index'] );
Route::get('/equipamentos/create', [EquipamentoController::class, 'create'] );
Route::post('/equipamentos', [EquipamentoController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});


