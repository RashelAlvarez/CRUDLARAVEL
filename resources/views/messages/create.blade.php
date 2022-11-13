@extends('layout')

@section('contenido')
    <h1>Contactos</h1>
    
        <form action="{{route('messages.store')}}" method="post" class="mt-3">
            @csrf
            <div class="col-6" >
                <label for="Nombre">Nombre </label>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre" value="{{old('nombre')}}">
                    {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
            </div>
            <div class="col-6 mt-3" >
                <label for="email ">Email  </label>
                <input type="email" name="email" placeholder="name@example.com" class="form-control" id="email" value="{{old('email')}}">
                {!!$errors->first('email', '<span class=error>:message</span>')!!}
            </div>
            <div class="col-6 mt-3">
                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control" value="{{old('mensaje')}}" cols="100" rows="5"></textarea>
                {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
            </div>
            <input type="submit" value="Enviar" class="btn btn-success btn-sm mt-3">
        </form>
        <br>
            @if (session()->has('info'))
            <h3>{{session('info')}}</h3>
                
            @endif
        <br>
   


@endsection