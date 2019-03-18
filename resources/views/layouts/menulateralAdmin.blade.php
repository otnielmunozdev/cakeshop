<ul class="sidebar navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="{{ url('inicioAdministrador') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard - Panel de Adminitraci&oacute;n</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Sucursales</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Operaciones CRUD:</h6>
        <a class="dropdown-item" href="{{route('sucursales.create')}}">Crear</a>
        <a class="dropdown-item" href="{{route('sucursales.index')}}">Mostrar</a>
        <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
        <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
      </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Empleados</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Operaciones CRUD:</h6>
          <a class="dropdown-item" href="{{--route('/')--}}">Crear</a>
          <a class="dropdown-item" href="{{--route('/')--}}">Mostrar</a>
          <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
          <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
        </div>
      </li>

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Productos</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Operaciones CRUD:</h6>
            <a class="dropdown-item" href="{{--route('/')--}}">Crear</a>
            <a class="dropdown-item" href="{{--route('/')--}}">Mostrar</a>
            <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
            <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
          </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-fw fa-folder"></i>
              <span>Clientes</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
              <h6 class="dropdown-header">Operaciones CRUD:</h6>
              <a class="dropdown-item" href="{{--route('/')--}}">Crear</a>
              <a class="dropdown-item" href="{{--route('/')--}}">Mostrar</a>
              <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
              <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
            </div>
          </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Cuentas</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Operaciones CRUD:</h6>
                <a class="dropdown-item" href="{{--route('/')--}}">Crear</a>
                <a class="dropdown-item" href="{{--route('/')--}}">Mostrar</a>
                <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
                <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
              </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Pedidos</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                  <h6 class="dropdown-header">Operaciones CRUD:</h6>
                  <a class="dropdown-item" href="{{--route('/')--}}">Crear</a>
                  <a class="dropdown-item" href="{{--route('/')--}}">Mostrar</a>
                  <a class="dropdown-item" href="{{--route('/')--}}">Editar</a>
                  <a class="dropdown-item" href="{{--route('/')--}}">Eliminar</a>
                </div>
              </li>
    <!--li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li-->
  </ul>