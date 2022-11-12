@extends('layout')

@section('contenido')
   <h1>Editar mensaje</h1> 

   <form action="{{route('messages.update', $message->id)}}" method="post">
    @csrf
    {!! method_field('PUT')!!}
  <p><label for="Nombre">Nombre
    <input type="text" name="nombre" id="nombre" value="{{$message->nombre}}">
    {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
</label></p>  
<p> <label for="email">Email
    <input type="email" name="email" id="email" value="{{$message->email}}">
    {!!$errors->first('email', '<span class=error>:message</span>')!!}
</label></p>
   <p>  <label for="mensaje">Mensaje
    <textarea name="mensaje" id="mensaje"  cols="30" rows="10">{{$message->mensaje}}</textarea>
    {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
</label></p>
  
<input type="submit" value="Enviar">
</form>
   @endsection