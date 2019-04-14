<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard - Cake Shop</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  

</head>

<body id="page-top">


    @include('layouts.menutopAdmin')

  
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.menulateralAdmin')
    
        <div id="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                {{--@include('layouts.directorioAdmin')--}}
                <div class="container">
                        @yield('contenido')
                </div>
            </div>
            <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        @include('layouts.footerAdmin')
        </div>
        <!-- /.content-wrapper -->
  </div>
  <!-- /#wrapper -->


  
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin.min.js')}}"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
  {{--<script>
      $(document).ready( function () {
        $('#sucursalesTable').DataTable({
          "processing": true,
          "serverSide": true,
          "ajax": "/api/sucursales",
          "columns":[
              {data: 'id'},
              {data: 'direccion'},
              {data: 'horario'},
              {data: 'mapa'},
              {data: 'telefono'},
          ]
      
        });
    } );
      </script>--}}
      @include('Sucursales.sucursalIndexAJAX')



</body>

</html>
