<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">PPDB 2022</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Mukhammad Yasin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/admin" class="nav-link {{ ($title === "Dashboard") ? 'active' :'' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/jumlah" class="nav-link {{ ($title === "Jumlah") ? 'active' :'' }}">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Jumlah
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/formulir" class="nav-link {{ ($title === "Formulir") ? 'active' :'' }}">
            <i class="nav-icon fas fa-clipboard-list"></i>
            <p>
              Formulir
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/pendaftar" class="nav-link {{ ($title === "Pendaftar") ? 'active' :'' }}">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>
              Data Pendaftar
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/valid" class="nav-link {{ ($title === "Valid") ? 'active' :'' }}">
            <i class="nav-icon fas fa-user-check"></i>
            <p>
              Siswa Valid
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/invalid" class="nav-link {{ ($title === "Invalid") ? 'active' :'' }}">
            <i class="nav-icon fas fa-user-times"></i>
            <p>
              Siswa Invalid
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tools"></i>
            <p>
              Admin Menu
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/manage" class="nav-link {{ ($title === "Manage") ? 'active' :'' }}">
                <i class="nav-icon fas fa-users-cog"></i>
                <p>Managemen User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/instansi" class="nav-link {{ ($title === "Instansi") ? 'active' :'' }}">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>Lembaga Asal</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/setting" class="nav-link {{ ($title === "Setting") ? 'active' :'' }}">
                <i class="nav-icon fas fa-cog"></i>
                <p>Setting</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>