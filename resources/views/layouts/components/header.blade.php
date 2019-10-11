  <header class="main-header">

    @include('layouts.components.subHeaders.logo')

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          @include('layouts.components.subHeaders.messageMenu')
          <!-- Notifications Menu -->
          @include('layouts.components.subHeaders.notificationMenu')
          <!-- Tasks Menu -->
          @include('layouts.components.subHeaders.taskMenu')
          <!-- User Menu -->
          @include('layouts.components.subHeaders.userLink')
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>