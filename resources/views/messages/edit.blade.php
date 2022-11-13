@extends('layout')

@section('contenido')
  <h1>Editar mensaje</h1> 
   
    <div class="container m-5 ">
      <form action="{{route('messages.update', $message->id)}}" method="post"  >
          @csrf
          {!! method_field('PUT')!!}
      
        <div class="mb-3" >
          <p>
            <label for="Nombre">Nombre
              <input  type="text" name="nombre" class="form-control"  id="nombre" value="{{$message->nombre}}">
                  {!!$errors->first('nombre', '<span class=error>:message</span>')!!}
            </label>
          </p>  
        </div>
        <div class="mb-3">
          <p> 
            <label for="email">Email
              <input type="email" name="email" class="form-control" id="email" value="{{$message->email}}">
                {!!$errors->first('email', '<span class=error>:message</span>')!!}
            </label>
          </p>
        </div>
        <div class="mb-3">
          <p>  
            <label for="mensaje">Mensaje
                  <textarea name="mensaje" id="mensaje" class="form-control" cols="100" rows="5">{{$message->mensaje}}</textarea>
                  {!!$errors->first('mensaje', '<span class=error>:message</span>')!!}
            </label>
          </p>        
            
          <input type="submit" value="Enviar" class="btn btn-success btn-sm">
          
        </div>
      
      </form>
    </div>


@endsection