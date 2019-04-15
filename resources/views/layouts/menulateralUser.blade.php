<aside class="left-sidebar">
        <div class="d-flex no-block nav-text-box align-items-center">
            <span><img src="{{asset('img/logo2.png')}}" alt="" width="50%"></span>
            <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{route('home')}}" aria-expanded="false"><i class="fa fa-user-circle-o"></i><span class="hide-menu">Perfil</span></a></li>
                   <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu"></span>Pedidos</a></li>
                   <li> <a class="waves-effect waves-dark" href="{{ url('/') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Regresa a nuestra Pagina</span></a></li>

                   
                    
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>