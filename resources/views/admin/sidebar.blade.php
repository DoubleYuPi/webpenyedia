<div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{url('admindashboard')}}" class="nav-link {{ request()->is('beranda','admindashboard') ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        @if(Auth::user()->status=='pp')
        <li class="nav-item {{ request()->is('datapenyedia', 'datapekerjaan', 'datapersonil') ? 'menu-open' : ''}}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Manage Data 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('datapenyedia')}}" class="nav-link {{ request()->is('datapenyedia') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Penyedia</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{url('datapersonil')}}" class="nav-link {{ request()->is('datapersonil') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Personil</p>
              </a>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item {{ request()->is('datapenyedia', 'datapekerjaan', 'datapersonil') ? 'menu-open' : ''}}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Manage Data 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('datapenyedia')}}" class="nav-link {{ request()->is('datapenyedia') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tabel Penyedia</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{url('datapekerjaan')}}" class="nav-link {{ request()->is('datapekerjaan') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Tabel Pekerjaan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('datapersonil')}}" class="nav-link {{ request()->is('datapersonil') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Data Personil</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
        
        @if(Auth::user()->status=='super')
        <li class="nav-header">PENILAIAN</li>
        <li class="nav-item">
          <a href="{{url('datanilai_penyedia')}}" class="nav-link {{ request()->is('datanilai_penyedia') ? 'active' : ''}}"">
            <i class="nav-icon fas fa-clipboard-check"></i>
            <p>
              Tabel Penilaian
            </p>
          </a>
        </li>
        @elseif(Auth::user()->status=='ppk')
        <li class="nav-header">PENILAIAN</li>
        <li class="nav-item">
          <a href="{{url('nilaipekerjaan')}}" class="nav-link {{ request()->is('nilaipekerjaan') ? 'active' : ''}}"">
            <i class="nav-icon fas fa-clipboard-check"></i>
            <p>
              Tabel Penilaian
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->status=='super')
        <li class="nav-header">USER</li>
        <li class="nav-item">
          <a href="{{url('datauser')}}" class="nav-link {{ request()->is('datauser') ? 'active' : ''}}"">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Tabel User
            </p>
          </a>
        </li>
        @endif
        @if (Auth::user()->status=='super')
        <li class="nav-header">REKAP DATA</li>
        <li class="nav-item {{ request()->is('rekappekerjaan', '') ? 'menu-open' : ''}}">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Rekap 
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('')}}" class="nav-link {{ request()->is('') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Rekap Penyedia</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{url('rekappekerjaan')}}" class="nav-link {{ request()->is('rekappekerjaan') ? 'active' : ''}}">
                <i class="far fa-circle nav-icon"></i>
                <p>Rekap Pekerjaan</p>
              </a>
            </li>
          </ul>
        </li>
        @endif
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->

  