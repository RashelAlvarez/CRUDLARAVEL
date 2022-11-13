<?php
use App\Http\Controllers\MessagesController;
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


Route::get('mensajes/create', [MessagesController::class, 'create'])->name('messages.create'); //imprime formulario
Route::post('mensajes', [MessagesController::class, 'store'])->name('messages.store'); //guardar y redireccionar mensajes
Route::get('/', [MessagesController::class, 'index'])->name('messages.index'); //mostrar todos los mensajes
Route::get('mensajes/{id}', [MessagesController::class, 'show'])->name('messages.show'); //muestra mensaje en especifico
Route::get('mensajes/{id}/edit', [MessagesController::class, 'edit'])->name('messages.edit'); //formulario para editar
Route::put('mensajes/{id}', [MessagesController::class, 'update'])->name('messages.update'); //modifica un mensaje en especifo
Route::delete('mensajes/{id}', [MessagesController::class, 'destroy'])->name('messages.destroy'); //elimina un mensaje en especifo


