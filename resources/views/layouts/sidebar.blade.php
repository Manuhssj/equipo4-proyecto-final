<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('images/logo_avion.png')}}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{asset('images/vd-viaje-letras-blancas.png')}}" alt="" height="40">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('images/logo_avion.png')}}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{asset('images/vd-viaje-letras-blancas.png')}}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menú</span></li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('users.index') }}">
                        <i class="mdi mdi-account-group"></i><span data-key="t-users">Usuarios</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-apps-fill"></i> <span data-key="t-maps">Categorías</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('categories.tours') }}" class="nav-link" data-key="t-vector">
                                    Tours
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.activities') }}" class="nav-link" data-key="t-google">
                                    Actividades
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('categories.privasteTours') }}" class="nav-link" data-key="t-leaflet">
                                    Tours privados
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('clients.index') }}">
                    <i class="ri-group-2-fill"></i> <span data-key="t-widgets">Clientes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('services.index') }}">
                        <i class="mdi mdi-room-service-outline"></i> <span data-key="t-widgets">Servicios</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reservations.index') }}">
                        <i class="ri-calendar-2-fill"></i> <span data-key="t-widgets">Reservaciones</span> <span class="badge badge-pill bg-danger" data-key="t-new">15</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('reports.index') }}">
                        <i class="ri-newspaper-fill"></i> <span data-key="t-widgets">Reportes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('dashboard.index') }}">
                        <i class="ri-database-2-fill"></i> <span data-key="t-widgets">Estadísticas/Dashboard</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>