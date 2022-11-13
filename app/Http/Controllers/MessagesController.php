<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Models\Message;
use App\Http\Requests\ContactoRequest;
class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $messages=Message::all(); //consultas usando a la bd usando eloquent
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
         //return $request->all(); //visualizar todos los datos en formato json
        // return $request->input('nombre'); //retorna el valor de un elemento
        //guardar mensaje
  
        Message::create($request->all());
        //redireccionar
        return redirect()->route('messages.index');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
      //  $message=DB::table('messages')->where('id', $id)->first();
        $message = Message::findOrFail($id); //eloquent
        //el metodo find or fail falla cuando no encuentra el parametro y retorna un 404.blade.php
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        $message = Message::findOrFail($id);
     
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactoRequest $request, $id)
    {
        //
        //ACTUALIZAR MENSAJE con eloquent/** */
        $message = Message::findOrFail($id);
        $message->update($request->all());
      
       


        //REDIRECCIONAR

        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         Message::findOrFail($id)->delete();
        return redirect()->route('messages.index');
      
    }
}
