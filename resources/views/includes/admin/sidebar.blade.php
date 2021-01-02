<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Annechips</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - UangMasuk -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('pemasukan.index') }}">
          <i class="fas fa-fw fa-coins"></i>
          <span>Pemasukan</span></a>
      </li>

      <!-- Nav Item - pengeluaran -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('pengeluaran.index') }}">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>pengeluaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
  
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="{{ route('pengeluaran.index') }}"></button>
      </div>

    </ul>