<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" class="brand-link">
          <img src="{{asset('dist/img/logoMicroNoel.jpg')}}" alt="Micromania Logo" class="brand-image img-rounded elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">Micromania TB</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {!! Request::is('admin') ? 'active' : '' !!}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Test Graph
                  </p>
                </a>
              </li>
              <li class="nav-header">SAV</li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Customer Infos
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Delete Customer
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    ORDER INFO
                  </p>
                </a>
              </li>
              <li class="nav-header">MERCH</li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Stock Products
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Operation Date
                  </p>
                </a>
              </li>

              <li class="nav-header">Order Management</li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Update Order Status
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Update Order Export Status
                  </p>
                </a>
              </li>
              <li class="nav-header">Customer Management</li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Delete User
                  </p>
                </a>
              </li>
              <li class="nav-header">Administration</li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Manage TB Users
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Stores List
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Export command SFCC to SRV2
                  </p>
                </a>
              </li>
              <li class="nav-item">
            
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    BazaarVoice Export
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Generate BV Flow
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Export Commandes Appli
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Customer Error
                  </p>
                </a>
              </li>
              <li class="nav-header">POC</li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    WebIt Scripts
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Reservation
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Yext
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Check Order
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Customer unverify
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Micro SRV2
                  </p>
                </a>
              </li>
              <li class="nav-item">

                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    OCAPI
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Reach 5
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    LIFT FORWARD
                  </p>
                </a>
              </li>
              <li class="nav-item">
                
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Test Graph
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
          @yield('content')
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.0.0-rc.5
        </div>
      </footer>
    
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
</body>
</html>
