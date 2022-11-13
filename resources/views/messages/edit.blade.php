@extends('layout')

@section('contenido')
  <h1>Editar mensaje</h1> 
      <form action="{{route('messages.update', $message->id)}}" method="post" class="mt-3" >
          @csrf
          {!! method_field('PUT')!!}
          <div class="col-6" >
            <label for="Nombre">Nombre</label>
              <input  type="text" name="nombre" class="form-control" placeholder="Nombre"  id="nombre" value="{{$message->nombre}}">
                  {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
        </div>
        <div class="col-6 mt-3">
            <label for="email">Email </label>
              <input type="email" name="email" class="form-control" placeholder="name@example.com" id="email" value="{{$message->email}}">
                {!!$errors->first('email', '<span class=error>:message</span>')!!}
        </div>
        <div class="col-6 mt-3">
            <label for="mensaje">Mensaje</label>
                  <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control" cols="100" rows="5">{{$message->mensaje}}</textarea>
                  {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
          <input type="submit" value="Enviar" class="btn btn-success btn-sm mt-3">
        </div>
      </form>
@endsection