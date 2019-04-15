
@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a> 
                </li>
                @if (isset($producto))
                <li class="breadcrumb-item active">{{route('producto.update',$producto->id)}}</li>
                @else
                <li class="breadcrumb-item active">{{route('producto.create')}}</li>
                @endif
               
                
        </ol>
</div>
<div class="card">
    
<div class="card-header">
       
        @if (isset($producto))
        <h3 class="card-title">Modificar producto: {{$producto->id}}</h3>
        @else
        <h3 class="card-title">Capturar Producto</h3> 
        @endif
        <a href="{{route('producto.index') }}" class="btn btn-dark btn-sm "><i class="fas fa-fill"></i> Lista de Productos</a> 

        
</div>
  <div class="card-body">

        @include('partials.formErrors')
        
        <div class="col-md-8 offset-md-2 col-sm-12 ">

            
                @if (isset($producto))
                <form action="{{ route('producto.update',$producto->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
                @else
                <form action="{{ route('producto.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
               @endif

            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label"><strong>Producto</strong></label>
                    <input type="text" class="form-control"  placeholder="Nombre Producto" value="{{$producto->nombre ?? ''}}{{ old('nombre') }}"name="nombre" >
                    @if ($errors->has('nombre'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong> 
                        </span>
                    @endif
                    
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Tipo de Producto</strong></label>
                        <input type="text" class="form-control"  placeholder="Tipo de Producto" value="{{$producto->tipo_producto ?? ''}}{{ old('tipo_producto') }}"name="tipo_producto" >
                        @if ($errors->has('tipo_producto'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('tipo_producto') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Precio</strong></label>
                        <input type="text" class="form-control"  placeholder="Precio" value="{{$producto->precio ?? ''}}{{ old('precio') }}"name="precio" >
                        @if ($errors->has('precio'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('precio') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Descripcion</strong></label>
                        <input type="text" name="descripcion" id="" cols="30" rows="10" class="form-control" value="{{$producto->descripcion ?? ''}}{{ old('descripcion') }}">
                        @if ($errors->has('descripcion'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('descripcion') }}</strong> 
                        </span>
                    @endif
                </div>

                
                <button type="submit" class="btn btn-primary block "><i class="fas fa-save"></i> Guardar</button>
                <button type="reset" class="btn btn-info block offset-9"><i class="fas fa-minus"></i>  Limpiar Campos</button>
                </div>

        </form>
        </div>
  </div>
</div>
    
@endsection