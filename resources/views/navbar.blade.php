<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar Uno</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <header class="header">
        <div class="nav-links">
            <li><a href="{{route('inicio')}}">Inicio</a></li>
            <li><a href="{{route('crear')}}">Agregar Oferente</a></li>
            <li><a href="{{route('buscar')}}">Buscar Oferente</a></li>
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="{{route('zona1')}}">Zona 1</a></li>
                <li><a href="{{route('zona2')}}">Zona 2</a></li>
                <li><a href="{{route('zona3')}}">Zona 3</a></li>
                <li><a href="{{route('zona4')}}">Zona 4</a></li>
                <li><a href="{{route('zona5')}}">Zona 5</a></li>
                <li><a href="{{route('zona6')}}">Zona 6</a></li>
           </ul>            
        </nav>
    </header>
    <div class="clearfix my-5">
        @yield('content')
    </div>
</body>
<html>