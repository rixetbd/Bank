@php
$currentRouteName = Route::currentRouteName();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - BDOSC</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    @yield('header_style')
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend_assets')}}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{asset('backend_assets')}}/dist/img/logo.png" alt="BDOSC" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                @php
                    $contact = \App\Models\Contact::where('status', '=', '1')->get();
                @endphp

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">{{$contact->count()}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        {{-- <span class="dropdown-item dropdown-header">15 Notifications</span> --}}
                        {{-- <div class="dropdown-divider"></div> --}}

                        <a href="{{route('admin.inbox')}}" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> {{$contact->count()}} new messages
                            {{-- <span class="float-right text-muted text-sm">3 mins</span> --}}
                        </a>
                        {{-- <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> --}}
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> --}}
                <li class="nav-item">

                    <a class="nav-link text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{route('admin.index')}}" class="brand-link">
                <img src="{{asset('backend_assets')}}/dist/img/logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">BDOSC</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                    <div class="image">
                        {{-- <img src="{{asset('backend_assets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image"> --}}
                            <i class='bx bx-user bx-border-circle' ></i>
                    </div>
                    <div class="info">
                        <a href="{{route('admin.profile.index')}}" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                {{-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('admin.index')}}"
                                class="nav-link {{($currentRouteName == "admin.index"?"active":" ")}}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item {{($currentRouteName == "admin.leads.index"?"menu-open":" ")}} {{($currentRouteName == "admin.leads.importpage"?"menu-open":" ")}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Leads
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.leads.index')}}"
                                        class="nav-link {{($currentRouteName == "admin.leads.index"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Leads</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.leads.importpage')}}" class="nav-link {{($currentRouteName == "admin.leads.importpage"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Import & Export</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{($currentRouteName == "admin.countrie.index"?"menu-open":" ")}}{{($currentRouteName == "admin.city.index"?"menu-open":" ")}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-map-marker-alt"></i>
                                <p>
                                    Location
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.countrie.index')}}"
                                        class="nav-link {{($currentRouteName == "admin.countrie.index"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Country</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.city.index')}}"
                                        class="nav-link {{($currentRouteName == "admin.city.index"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>City</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{($currentRouteName == "admin.user.all"?"menu-open":" ")}}{{($currentRouteName == "admin.profile.index"?"menu-open":" ")}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Users
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                {{-- @if (Auth::user()->role !== "basic_user") --}}
                                <li class="nav-item">
                                    <a href="{{route('admin.user.all')}}" class="nav-link {{($currentRouteName == "admin.user.all"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Users</p>
                                    </a>
                                </li>
                                {{-- @endif --}}
                                <li class="nav-item">
                                    <a href="{{route('admin.profile.index')}}" class="nav-link {{($currentRouteName == "admin.profile.index"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.industry.index')}}"
                                class="nav-link {{($currentRouteName == "admin.industry.index"?"active":" ")}}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Industry
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item {{($currentRouteName == "admin.inbox"?"menu-open":" ")}}{{($currentRouteName == "admin.inbox.compose"?"menu-open":" ")}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.inbox')}}" class="nav-link {{($currentRouteName == "admin.inbox"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.inbox.compose')}}" class="nav-link {{($currentRouteName == "admin.inbox.compose"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item {{($currentRouteName == "admin.service.index"?"menu-open":" ")}}{{($currentRouteName == "admin.service.create"?"menu-open":" ")}}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-umbrella"></i>
                                <p>
                                    Services
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.service.index')}}" class="nav-link {{($currentRouteName == "admin.service.index"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.service.create')}}" class="nav-link {{($currentRouteName == "admin.service.create"?"active":" ")}}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.menu.index')}}"
                                class="nav-link  {{($currentRouteName == "admin.menu.index"?"active":" ")}}">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                    Menu
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Settings
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.settings')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Information</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Others</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    {{ __('Logout') }}
                                    {{-- <i class="right fas fa-angle-left"></i> --}}
                                </p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('container')


            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; <script>
                        let date = new Date();
                        document.write(date.getFullYear());

                    </script> <a href="{{url('/')}}" target="_blank">BDOSC</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 1.0
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{asset('backend_assets')}}/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{asset('backend_assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('backend_assets')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('backend_assets')}}/dist/js/adminlte.js"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{asset('backend_assets')}}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
        <script src="{{asset('backend_assets')}}/plugins/raphael/raphael.min.js"></script>
        <script src="{{asset('backend_assets')}}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
        <script src="{{asset('backend_assets')}}/plugins/jquery-mapael/maps/usa_states.min.js"></script>
        <!-- ChartJS -->
        <script src="{{asset('backend_assets')}}/plugins/chart.js/Chart.min.js"></script>

        @yield('footer_script')

        {{-- <!-- AdminLTE for demo purposes -->
<script src="{{asset('backend_assets')}}/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('backend_assets')}}/dist/js/pages/dashboard2.js"></script> --}}
</body>

</html>
