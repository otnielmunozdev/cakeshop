

@if(Session::has('mensaje'))
    <div class="alert {{ Session::get('alert-class', '') }} alert-dismissible" role="alert">
        <button type="button" class="close text-center" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('mensaje') }}
    </div>
@endif