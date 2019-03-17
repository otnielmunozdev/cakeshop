
@extends('layouts.app')

@section('content')

<div class="container" id="contenedorpromocion">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" id="carruseles" >
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" >
        <div class="carousel-item active">
          <img src="{{ asset('img/promociones1.jpg') }}" class=" text-center w-90" alt="promocion1" width="">
        </div>
        <div class="carousel-item" >
          <img src="{{ asset('img/promocion2.jpg') }}" class="text-center w-90" alt="promocion2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/promocion3.jpg') }}" class="text-center w-90 img-fluid" alt="promocion3">       
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/promocion4.jpg') }}" class="text-center w-90 " alt="promocion4">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  
<footer class="">
        @include('layouts.footer')
</footer>
                
    
@endsection

