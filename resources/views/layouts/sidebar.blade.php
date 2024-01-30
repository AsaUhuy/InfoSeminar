<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-icon">
          {{-- <i class="fas fa-laugh-wink"></i> --}}
          <img src="{{ asset('admin_assets/img/logo.png') }}" width="50">
      </div>
      <div class="sidebar-brand-text mx-3">Info<br><small>Seminar</small></div>
  </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
   
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
          aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Kegiatan</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ route('jenisKegiatan/index') }}">Jenis Kegiatan</a>
              <a class="collapse-item" href="{{ route('kegiatan.index') }}">Kegiatan</a>
          </div>
      </div>
  </li>

    
    {{-- <li class="nav-item">
      <a class="nav-link" href="{{ route('jenisKegiatan/index') }}">
      <i class="fas fa-fw fa-warehouse"></i>
        <span>Jenis Kegiatan</span></a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kegiatan.index') }}">
      <i class="fas fa-fw fa-user"></i>
        <span>Kegiatan</span></a>
    </li> --}}
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    
  </ul>