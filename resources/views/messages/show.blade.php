@extends('layout')

@section('contenido')

<h1>Enviado por</h1>
   <p><b>Nombre: </b> {{$message->nombre}}</p>
   <p><b>Email: </b> {{$message->email}}</p>
<p><b>El mensaje enviado es: </b> {{$message->mensaje}}</p>

    @endsection

