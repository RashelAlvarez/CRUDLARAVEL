<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

    .footer{
        position: fixed;
    bottom: 0;
    width:100%;
    }

 
</style>

<body>
<header>
    <nav  class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3 ">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"> 
                    <a class="{{request()->is('mensajes/create') ? 'active' : '' }} nav-link" href="{{ route('messages.create')}} ">Crear contacto</a>
                </li>
                <li class="nav-item">
                    <a class="{{request()->is('/') ? 'active' : '' }} nav-link" href="{{ route('messages.index')}} ">Todos los contactos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container mt-5">
        @yield('contenido')
    </div>
</main>

</body>
    
        <footer class="text-center bg-light p-4 footer">Copyright Rashel Alvarez {{date('Y')}}</footer>
  
</html>