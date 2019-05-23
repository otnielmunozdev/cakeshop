@extends('layouts.Admin')
@section('contenido')

<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a>
                </li>
                @if (isset($pedido))
                <li class="breadcrumb-item active">{{route('pedidos.edit',$pedido->id)}}</li>
                @else
                <li class="breadcrumb-item active">{{route('pedidos.create')}}</li>
                @endif
        </ol>
</div>


<div class="card">
    
        <div class="card-header">     
                @if(isset($pedido))
                <h3 class="card-title">Editar Pedido n&uacute;mero: {{$pedido->id}}</h3> 
                @else
                <h3 class="card-title">Capturar Pedido</h3>
                @endif       
                 
                <a href="{{route('pedidos.index') }}" class="btn btn-dark btn-sm "><i class="fas fa-fill"></i> Lista de Pedidos</a>    
        </div>

          <div class="card-body">
        
                @include('partials.formErrors')
                
                <div class="col-md-8 offset-md-2 col-sm-12 ">
                        @if (isset($pedido))
                            <form action="{{ route('pedidos.update',$pedido->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                            <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
                        @else
                            <form action="{{ route('pedidos.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
                        @endif
        
                                @csrf
                
                                <div class="form-group">
                                  <label class="form-label">Usuario de asignacion al pedido</label>
                                  <select name="user_id" class="form-control">
                                    @foreach($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}"{{ isset($pedido) && $pedido->user_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->apellido }}-{{ $usuario->nombre }}-{{ $usuario->email }}-{{ $usuario->rol }}</option>
                                    @endforeach
                                  </select>
                                </div>
                
                                <div class="form-group">
                                  <label class="form-label">Fecha de entrega</label>
                                  <input type="date" class="form-control" name="fecha_entrega" value="{{ isset($pedido) ? $pedido->fecha_entrega : '' }}{{ old('fecha_entrega') }}" >
                                </div>
                
                
                                <div class="form-group">
                                  <label class="form-label">Productos</label>
                                  <select name="producto_id[]" class="form-control" multiple>
                                    @foreach($productos as $produc)
                                        <option value="{{ $produc->id }}"{{ isset($pedido) && array_search($produc->id, $pedido->productos->pluck('id')->toArray()) !== false ? 'selected' : '' }}>{{ $produc->nombre }} - {{ $produc->tipo_producto }} - ${{ $produc->precio }}</option>
                                    @endforeach
                                  </select>
                                </div>


                                <div class="form-group">
                                  <label class="form-label">Sucursal para recoger el pedido</label>
                                  <select name="sucursal_id" class="form-control">
                                    @foreach($sucursales as $sucursal)
                                        <option value="{{ $sucursal->id }}"{{ isset($pedido) && $pedido->sucursal_id == $sucursal->id ? 'selected' : '' }}>{{ $sucursal->direccion }}</option>
                                    @endforeach
                                  </select>
                                </div>

                
                                <button type="submit" class="btn btn-primary ml-auto">Aceptar</button>
                                <button type="reset" class="btn btn-info block offset-9"><i class="fas fa-minus"></i>  Limpiar Campos</button>
                
                            </form>
        
                   
                </div>
          </div>
</div>



@endsection 