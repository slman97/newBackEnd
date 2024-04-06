<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />  
      
    <!-- Theme style -->
    <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css" />
   
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('plugins/iCheck/flat/blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="{{ asset('plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="{{ asset('plugins/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="{{ asset('plugins/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />

  </head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
  
</head>
<body>
    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
             
              <li class="dropdown user user-menu">
                <a class="nav-link py-4 " href="" > Logout </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
              </form>
                <a href="{{ route('logout') }}" class="dropdown-toggle" data-toggle="dropdown"role="button" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">

                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>

           
        
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                Dashboard
                <small>Control panel</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>
    
            <!-- Main content -->
            @yield('content')
          </div><!-- /.content-wrapper -->
          <script src="{{ asset('js/jquery.js') }}"></script>
        @yield('script')
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
          </footer>
        </div><!-- ./wrapper -->
    
        <!-- jQuery 2.1.3 -->

        <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Morris.js charts -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="{{asset('plugins/morris/morris.min.js')}}plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="{{asset('plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="{{asset('plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='{{asset('plugins/fastclick/fastclick.min.js')}}'></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/app.min.js')}}" type="text/javascript"></script>
    
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{asset('dist/js/pages/dashboard.js')}}" type="text/javascript"></script>
    
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset('dist/js/demo.js')}}" type="text/javascript"></script>
    
</body>
</html>
