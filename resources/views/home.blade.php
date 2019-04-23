@extends('layouts.UserCount')

@section('contenido')

<div class="container">
    <div class="page-title text-center">
            <h1>Bienvenido {{session('apodo')}} , puedes ordenar tus pedidos ahora mismo</h1>            
    </div>
</div>

<div class="card">  
        <div class="card-header text-right">              
                <h3 class="card-title text-left">Datos Personales</h3> 
                <a href="{{route('sucursales.index') }}" class="btn btn-dark btn-sm "><i class="fas fa-fill"></i> Pedidos </a> 
            
        </div>
          <div class="card-body">
        
                @include('partials.formErrors')
                
                <div class="col-md-8 offset-md-2 col-sm-12 ">
                    @if (isset($sucursale))
                        <form action="{{ route('sucursales.update',$sucursale->id)}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
                        <input type="hidden" name="_method" value="PATCH">{{--cuando se remplaza algunas columnas del registro en la BD/ PUT remplaza todo--}}
                    @else
                        <form action="{{ route('sucursales.store')}} " method="POST">{{--Para que lo enviae a la URL la info del formulario--}}  
                    @endif
        
                    @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                        <div class="form-group">
                            <label class="form-label"><strong>Nombre</strong></label>
                            <input type="text" class="form-control"  placeholder="Direcci&oacute;n de la Sucursal" value="{{session('apodo')}} {{ old('apodo') }}"name="nombre"  disabled>
                            @if ($errors->has('apellido'))
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('apellido') }}</strong> 
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="form-label"><strong>Apellido</strong></label>
                            <input type="text" class="form-control"  placeholder="" value="{{auth()->user()->apellido}}{{ old('apellido') }}"name="apellido" disabled >
                            @if ($errors->has('apellido'))
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('apellido') }}</strong> 
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Correo</strong></label>
                            <input type="text" class="form-control"  placeholder="" value="{{auth()->user()->email}}{{ old('email') }}"name="email"  disabled>
                            @if ($errors->has('email'))
                                <span class="alert alert-danger " role="alert">
                                    <strong>{{ $errors->first('email') }}</strong> 
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="form-label"><strong>Tel&eacute;fono</strong></label>
                            <input type="text" class="form-control"  placeholder="Tel&eacute;fono" value="{{auth()->user()->telefono}}{{ old('telefono') }}"name="telefono"  disabled>
                            @if ($errors->has('telefono'))
                                <span class="alert alert-danger" role="alert">
                                    <strong>{{ $errors->first('telefono') }}</strong> 
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                                <label class="form-label"><strong>Password Encriptada</strong></label>
                                <input type="text" class="form-control"  placeholder="" value="{{auth()->user()->password}}{{ old('password') }}"name="password"  disabled>
                                @if ($errors->has('password'))
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong> 
                                    </span>
                                @endif
                            </div>

                        {{--<button type="submit" class="btn btn-primary block "> Guardar</button>--}}
                        </div>
        
                </form>
                </div>
          </div>
        </div>
    
@endsection




