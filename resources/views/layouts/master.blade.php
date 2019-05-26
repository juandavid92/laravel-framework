<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Titulo - @yield('titulo')</title>
</head>
<body>
    @section('header')
     Cabecera web
    @show 
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
     Pie web
    @show 
</body>
</html>