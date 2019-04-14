<script>
        $('#sucursalesTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '/api/sucursales',
          columns: [
              {data: 'action', name: 'action', orderable: false, searchable: false},
              {data: 'id', name: 'id'},
              {data: 'direccion', name: 'direccion'},
              {data: 'horario', name: 'horario'},
              {data: 'telefono', name: 'telefono'},
              {data: 'mapa', name: 'mapa'},

          ]
      });
        </script>