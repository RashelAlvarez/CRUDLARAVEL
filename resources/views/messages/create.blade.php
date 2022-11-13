@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    <div class="container m-5 ">
        <form action="{{route('messages.store')}}" method="post">
            @csrf
            <div class="mb-3" >
            <p>
                <label for="Nombre">Nombre
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre')}}">
                    {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
                </label>
            </p>  
            </div>
            <div class="mb-3" >
            <p> 
                <label for="email">Email
                <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}">
                {!!$errors->first('email', '<span class=error>:message</span>')!!}
                </label>
            </p>
            </div>
            <div class="mb-3" >
            <p>  
                <label for="mensaje">Mensaje
                <textarea name="mensaje" id="mensaje" class="form-control" value="{{old('mensaje')}}" cols="100" rows="5"></textarea>
                {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
                </label>
            </p>
            </div>
            
            <input type="submit" value="Enviar" class="btn btn-success btn-sm">
        </form>
        <br>
            @if (session()->has('info'))
            <h3>{{session('info')}}</h3>
                
            @endif
        <br>
    </div>
@endsection