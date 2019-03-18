@extends('layouts.app')

@section('content')
<div class="container text-center" id="sucursaltitulo">
        <h2 class="display-4 p-4">UBICA ALGUNA DE NUESTRAS SUCURSALES</h2>
</div>
<div class="w-100"></div>

<div class="container" id="contenedorsucursal">
        @foreach ($sucursales as $sucur)   
    <div class="row">

        <div class ="col-4">

            <span>{{ $sucur->direccion}}</span><br>
            <span>Telefono: {{ $sucur->telefono}}</span>
            <p><strong>Horario: {{ $sucur->horario}}</strong></p>

        </div>
        <div class="col-8 transparente">
                <iframe src="{{ $sucur->mapa}}" width="100%" height="100%" frameborder="0" style="border:1" allowfullscreen>
                </iframe>
        </div>
    </div>
    <div class="w-100"></div>
    @endforeach
</div>

<footer class="">
        @include('layouts.footer')
</footer>
                
    
@endsection