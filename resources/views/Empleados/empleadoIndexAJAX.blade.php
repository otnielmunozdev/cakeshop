<script>
    $('#empleadosTable').DataTable({
      processing: true,
      serverSide: true,
      ajax: '/api/empleados',
      columns: [
          {data: 'action', name: 'action', orderable: false, searchable: false},
          {data: 'id', name: 'id'},
          {data: 'sucursal_id', name: 'sucursal_id'},
          {data: 'nombre', name: 'nombre'},
          {data: 'apellido', name: 'apellido'},
          {data: 'correo', name: 'correo'},
          {data: 'fecha_nac', name: 'fecha_nac'},
          {data: 'telefono', name: 'telefono'},
          {data: 'rol', name: 'rol'},

      ]
  });
    </script>