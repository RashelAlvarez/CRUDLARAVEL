<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    //
    public function index(){
        return view('contactos');
    }

    public function mensaje(ContactoRequest $request){


      //  return $request->all(); //procesar los datos del formulario
        return back()->with('info', 'Los datos fueron enviados correctamente');
    }    
}
