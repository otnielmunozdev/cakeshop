
@extends('layouts.Admin')

@section('contenido')



<div class="page-header">
        <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="{{url('inicioAdministrador')}}">Dashboard</a> 
                </li>
                @if (isset($user))
                <li class="breadcrumb-item active">{{route('user.edit',$user->id)}}</li>
                @else
                <li class="breadcrumb-item active">{{route('user.create')}}</li>
                @endif
                
        </ol>
</div>
<div class="card">
    
<div class="card-header">
        @if (isset($user))
        <h3 class="card-title">Modificar Cliente n&uacute;mero: {{$user->id}}</h3>
        @else
        <h3 class="card-title">Capturar Cliente</h3> 
        @endif
        <a href="{{route('user.index') }}" class="btn btn-dark btn-sm "><i class="fas fa-fill"></i> Lista de Clientes</a> 
    
</div>
  <div class="card-body">

        @include('partials.formErrors')
        
        <div class="col-md-8 offset-md-2 col-sm-12 ">
            @if (isset($user))
                <form action="{{ route('user.update',$user->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
            @else
                <form action="{{ route('user.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
            @endif

            @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                    <label class="form-label"><strong>Cliente</strong></label>
                    <input type="text" class="form-control"  placeholder="Nombre del Cliente" value="{{$user->nombre ?? ''}}{{ old('nombre') }}"name="nombre" >
                    @if ($errors->has('nombre'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong> 
                        </span>
                    @endif
                </div>

                <div class="form-group">
                        <label class="form-label"><strong>Apellido</strong></label>
                        <input type="text" class="form-control"  placeholder="Apellido del Cliente" value="{{$user->apellido ?? ''}}{{ old('apellido') }}"name="apellido" >
                        @if ($errors->has('apellido'))
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('apellido') }}</strong> 
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="form-label"><strong>Email</strong></label>
                        <input type="text" class="form-control"  placeholder="Correo del Cliente" value="{{$user->email ?? ''}}{{ old('email') }}"name="email" >
                        @if ($errors->has('nombre'))
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong> 
                            </span>
                        @endif
                    </div>


                    <div class="form-group">
                        <label class="form-label"><strong>Telefono</strong></label>
                        <input type="text" class="form-control"  placeholder="Nombre del Cliente" value="{{$user->telefono ?? ''}}{{ old('telefono') }}"name="telefono" >
                        @if ($errors->has('telefono'))
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong> 
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                            <label class="form-label"><strong>Contraseña</strong></label>
                            <input type="text" class="form-control"  placeholder="Contraseña del Cliente" value="{{$user->password ?? ''}}{{ old('email') }}"name="password" >
                            @if ($errors->has('password'))
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong> 
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