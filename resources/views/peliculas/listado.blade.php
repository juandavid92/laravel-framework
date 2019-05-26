@include('includes.header')
<!--IMPRIMIR PANTALLA-->
<h1>{{$titulo}}</h1>
<h3>
    {{$listado[1]}}
</h3>
<p>{{date('Y')}}</p>

{{--Esto es un comentario blade--}}



@if($titulo)
titulo {{$titulo}}
@else
el titulo no existe
@endif

@for($i = 0; $i<= 20; $i++)
el numero es {{$i}} <br>
@endfor

@foreach($listado as $pelicula)
<p>{{$pelicula}}</p>
@endforeach

@include('includes.footer')