@extends('layout')


@section('contenido')
    <h1>Todos los mensaaes</h1>

    <table border="1" width="100%">
        <thead>
            <tr>    
                <th>ID</th>
                <th>NOmbre</th>
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
                <td><a href="{{route('messages.edit', $message->id)}}">
                    Editar</a>
                <form style="display:inline" action="{{route('messages.destroy', $message->id)}}" method="POST">
                   @csrf
                   {!! method_field('DELETE')!!}
                    <button type="submit">Eliminar</button>
                </form></td>
            </tr>
            @endforeach
    
        </tbody>
    </table>
@endsection