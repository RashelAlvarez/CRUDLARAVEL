<?php
use App\Http\Controllers\ContactoController;
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
/// www.misitio.com
Route::get('/', [ 'as' => 'home', function () {
   return view('home');
}]);


Route::post('contacto', [ContactoController::class, 'mensaje'] );

Route::get('contacto/{nombre}', ['as' => 'saludos', function($nombre){
    return view('saludo', compact('nombre'));

}]);
Route::get('mensajes/create', [MessagesController::class, 'create'])->name('messages.create'); //imprime formulario
Route::post('mensajes', [MessagesController::class, 'store'])->name('messages.store'); //guardar y redireccionar mensajes
Route::get('mensajes', [MessagesController::class, 'index'])->name('messages.index'); //mostrar todos los mensajes
Route::get('mensajes/{id}', [MessagesController::class, 'show'])->name('messages.show'); //muestra mensaje en especifico
Route::get('mensajes/{id}/edit', [MessagesController::class, 'edit'])->name('messages.edit'); //muestra mensaje en especifico
Route::put('mensajes/{id}', [MessagesController::class, 'update'])->name('messages.update'); //modifica un mensaje en especifo
Route::delete('mensajes/{id}', [MessagesController::class, 'destroy'])->name('messages.destroy'); //modifica un mensaje en especifo

// www.misitio.com   Route::get('/', function(){ }) 

// www.misitio.com/contacto  Route::get('contacto', function(){})
