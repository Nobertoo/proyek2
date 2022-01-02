@php
function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{url('login')}}" class="d-block">
          @if(Auth::check())
          {{request()->user()->nama}}
          @else
          Silahkan Login
          @endif
        </a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{url('datapenyakit')}}" class="nav-link {{checkRouteActive('datapenyakit')}}">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Data Penyakit
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('datagejala')}}" class="nav-link {{checkRouteActive('datagejala')}}">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Data Gejala 
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('lokasi')}}" class="nav-link {{checkRouteActive('lokasi')}}">
            <i class="nav-icon fas fa-database"></i>
            <p>
             Lokasi Dokter
           </p>
         </a>
       </li>
       <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-user"></i>
          <p>
            User
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('user')}}" class="nav-link {{checkRouteActive('user')}}">
              <i class="fa fa-desktop"></i>
              <p>Admin</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
</aside>