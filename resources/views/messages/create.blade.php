@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
 
    <form action="{{route('messages.store')}}" method="post">
        @csrf
      <p><label for="Nombre">Nombre
        <input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
        {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
    </label></p>  
    <p> <label for="email">Email
        <input type="email" name="email" id="email" value="{{old('email')}}">
        {!!$errors->first('email', '<span class=error>:message</span>')!!}
    </label></p>
       <p>  <label for="mensaje">Mensaje
        <textarea name="mensaje" id="mensaje" value="{{old('mensaje')}}" cols="30" rows="10"></textarea>
        {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
    </label></p>
      
    <input type="submit" value="Enviar">
    </form>
    <br>
    @if (session()->has('info'))
    <h3>{{session('info')}}</h3>
        
    @endif
    <br>
@endsection