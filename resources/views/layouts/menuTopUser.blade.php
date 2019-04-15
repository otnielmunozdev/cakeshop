<header class="topbar text-center">
    
        <nav class="navbar top-navbar navbar-expand-md navbar-dark text-center">
            <div class="navbar-header">
                        <img src="{{asset('img/logo2.png')}}" alt="homepage" class="dark-logo" width="30%" height="10%">
            </div>
            
            <div class="navbar-collapse ">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light " href="javascript:void(0)"><i class="ti-menu"></i></a></li>   
                </ul>

                <li class="nav-item dropdown btn btn-black">Logout
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                
            </div>
            
            
        </nav>
    </header>