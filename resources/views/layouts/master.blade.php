
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('admin/css/master.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>


  </ul>


  <!-- Right navbar links -->


  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-tie"></i>    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="admin" class="brand-link">
    <img src="admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Ghumantey</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">

        <a href="" class="d-block">@guest

        @if (Route::has('login'))

              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

                  @endif
        @else
        Name: {{ Auth::user()->name }}

        @endguest </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">

          <ul class="nav nav-treeview">
              @can('Admin')
              <li class="nav-item has-treeview menu-open">
                  <a href="#" class="nav-link ">
                      <i class="nav-icon fas fa-headphones"></i>
                      <p>

                         Admin

                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{url('add_admin')}}" class="nav-link <?php if(url()->current()==url('add_admin')) { echo "active";} ?>">
                              <i class="far fa-compact-disc nav-icon"></i>

                              <p>add</p>

                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{url('list_admin')}}" class="nav-link <?php if(url()->current()==url('list_admin')){echo "active";}?>">
                              <i class="far fa-circle nav-icon"></i>
                              <p>list</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/roles" class="nav-link <?php if(url()->current()==url('list_admin')){echo "active";}?>">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Roles</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/users" class="nav-link <?php if(url()->current()==url('list_admin')){echo "active";}?>">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Users</p>
                          </a>
                      </li>


                  </ul>
              </li>



              <li class="nav-item has-treeview">
                  <a href="" class="nav-link <?php if(url()->current()==url('list_guide') || url()->current()==url('add_guide')) { echo "active";} ?>">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                          Guide
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{url('list_guide')}}" class="nav-link ">
                              <i class="far fa-circle nav-icon"></i>
                              <p>list</p>
                          </a>
                      </li>
                  </ul>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{url('add_guide')}}" class="nav-link ">
                              <i class="far fa-circle nav-icon"></i>
                              <p>add</p>
                          </a>
                      </li>
                  </ul>
              </li>

              {{--This is content of Guide --}}

          </ul>
        </li>

          @endcan

          {{--This is for tourist --}}
          <li class="nav-item has-treeview">
                  <a href="" class="nav-link <?php if(url()->current()==url('list_tourist')) { echo "active";} ?>">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                          Tourist
                          <i class="right fas fa-angle-left"></i>
                      </p>
                  </a>
                  <ul class="nav nav-treeview">
                      <li class="nav-item">
                          <a href="{{url('list_tourist')}}" class="nav-link ">
                              <i class="far fa-circle nav-icon"></i>
                              <p>list</p>
                          </a>
                      </li>
                  </ul>

              </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                         {!! session()->get('error') !!}

                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {!! session()->get('success') !!}

                </div>
            @endif

    </div>

@yield('content')

</div>

</div>


  <!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->

<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
</body>
</html>

  <!-- /.content-header -->
