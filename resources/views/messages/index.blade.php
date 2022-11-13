@extends('layout')


@section('contenido')
    <h1>Todos los mensajes</h1>

    <table  class="table table-striped table-hover">
        <thead>
            <tr>    
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
     
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{$message->id}}</td>
                <td>
                    <a href="{{route('messages.show', $message->id)}}">
                    {{$message->nombre}}</a></td>
                <td>{{$message->email}}</td>
                <td>{{$message->mensaje}}</td>
                <td><a href="{{route('messages.edit', $message->id)}}" class="btn btn-primary btn-sm">
                    Editar</a>
                <form style="display:inline" action="{{route('messages.destroy', $message->id)}}" method="POST">
                   @csrf
                   {!! method_field('DELETE')!!}
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
@endsection