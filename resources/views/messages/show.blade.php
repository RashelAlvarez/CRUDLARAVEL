@extends('layout')

@section('contenido')

<h1>mensake</h1>
   <p>enviado por {{$message->nombre}} {{$message->email}}
</p>   
<p>{{$message->mensaje}}</p>

    @endsection

