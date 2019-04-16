<script>
        $('#usersTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: '/api/user',
          columns: [
              {data: 'action', name: 'action', orderable: false, searchable: false},
              {data: 'id', name: 'id'},
              {data: 'nombre', name: 'nombre'},
              {data: 'apellido', name: 'apellido'},
              {data: 'email', name: 'email'},
              {data: 'telefono', name: 'telefono'},
              

          ]
      });
        </script>