@extends('layouts.base')

@section('master')
    
    <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
        <!-- Main Header -->
        @include('layouts.components.header')
        
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
          
          <!-- sidebar: style can be found in sidebar.less -->
          @include('layouts.components.sidenav')
          <!-- /.sidebar -->
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        @include('layouts.components.pageHeader')
        
        <!-- Main content -->
        <section class="content container-fluid">
          
          @yield('content')
          
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      
      <!-- Main Footer -->
      @include('layouts.components.footer')
      
      <!-- Control Sidebar -->
      @include('layouts.components.rightsidebar')
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
      </div>
  
  @endsection