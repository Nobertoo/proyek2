 <div class="container-fluid">
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav mr-2">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('beranda')}}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         @if(Auth::check())
         {{request()->user()->nama}}
         @else
         Silahkan Login
         @endif 
         <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" style="height: 120%" alt="User Image">
       </a>
       <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-user mr-2"></i> Profil
          
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-cog mr-2"></i> Setting
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{url('login')}}" class="dropdown-item">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </a>

      </div>
    </li>
  </ul>
</nav>
</div>