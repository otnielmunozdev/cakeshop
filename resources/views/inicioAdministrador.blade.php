@extends('layouts.Admin')

@section('contenido')

<div class="page-header">
    <div class="page-title text-center">
       BIENVENIDO AL PANEL DE ADMINISTRACIÓN SELECCIONA ALGUNA OPCI&Oacute;N PARA COMENZAR
       {{--Auth::guard('empleados')->user()->nombre--}}
    </div>
</div>
    
@endsection