@extends('layouts.app')

@section('content')

<div class="card">  
  <div class="card-header" id="contactoTitulo"> 
          <h3 class="card-title text-center" >Contactanos</h3>  
          <h2 class="card-title text-center"> Escribenos como podemos ayudarte , quejas o sugerencias.</h2>
  </div>


  <div class="card-body">
    @include('partials.formErrors')
        <div class="col-md-8 offset-md-2 col-sm-12 ">
          @include('partials.mensajes')
          <form action="{{route('mail.store')}}" method="POST">{{--Para que lo enviae a la URL la info del formulario--}}
    
                @csrf {{--valida que el formulario eeste dentro de la app , crea un token , si se quita la sesion expira--}}
                <div class="form-group">
                  <label class="form-label"><strong>Nombre</strong></label>
                  <input type="text" class="form-control"  placeholder="Nombre" name="name" >
                    @if ($errors->has('name'))
                      <span class="alert alert-danger" role="alert">
                      <strong>{{ $errors->first('name') }}</strong> 
                      </span>
                    @endif
                </div>
                    
                <div class="form-group">
                  <label class="form-label"><strong>T&uacute; email</strong></label>
                  <input type="text" class="form-control"  placeholder="ejemplo@gmail.com" name="email" >
                  @if ($errors->has('email'))
                      <span class="alert alert-danger" role="alert">
                          <strong>{{ $errors->first('email') }}</strong> 
                      </span>
                  @endif
                </div>

                <div class="form-group ">
                    <label class="form-label"><strong>Mensaje</strong></label>
                    <textarea name="mensaje" id="" cols="80" rows="10" class="form-control" ></textarea>
                    @if ($errors->has('mensaje'))
                        <span class="alert alert-danger" role="alert">
                            <strong>{{ $errors->first('mensaje') }}</strong> 
                        </span>
                    @endif
                </div>

              <button type="submit" class="btn btn-primary block ">Enviar mensaje</button>
        </form>
    </div>             
  </div>
</div>



  <footer class="">
    @include('layouts.footer')
  </footer>
    
@endsection


