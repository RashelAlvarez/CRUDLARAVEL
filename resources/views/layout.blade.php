<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
</head>
<style>
    .active{
    text-decoration: none;
    color: chartreuse;
}
    .error{
        color: red;
    }
</style>

<body>
<header>
    <nav>
        <a class="{{request()->is('/') ? 'active' : '' }}" href="{{route('home') }} ">Inicio</a>
        <a class="{{request()->is('contacto/*') ? 'active' : '' }}" href="{{route('saludos', 'Rashel')}} ">Saludo</a>
        <a class="{{request()->is('mensajes/create') ? 'active' : '' }}" href="{{ route('messages.create')}} ">Contacto</a>
        <a class="{{request()->is('mensajes') ? 'active' : '' }}" href="{{ route('messages.index')}} ">Todos los mensajes</a>
 
    </nav>
</header>
<main>
    @yield('contenido')
</main>

</body>

<footer>Copyright {{date('Y')}}</footer>
</html>