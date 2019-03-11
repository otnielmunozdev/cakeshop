@extends('layouts.app')
@section('content')
<h1>Documentos de {{ session('apodo') }}</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading"><strong> Bienvenido!</strong></h4>
                    <hr>
                <p class="mb-0">Has accedido a tu cuenta.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            
        </div>
    </div>
</div>
@endsection
