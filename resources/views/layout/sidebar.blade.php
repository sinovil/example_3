<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
          {{--  <a href="#" class="d-block">{{ auth()->user()->name }} / {{ auth()->user()->level }}</a>  --}}
          {{--  <a href="#" class="d-block">{{ auth()->user()->name }} / {{ auth()->user()->level }}</a>  --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="{{ url('/dasboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                <b>Dashboard</b>
              </p>
            </a>
          </li>

          {{-- <li class="nav-header"><b>UMUM</b></li> --}}
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-exclamation"></i>
                <p>
                    Pengaduan
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ url('/pengaduan') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Pengaduan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lihat Pengaduan</p>
                    </a>
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-comments"></i>
                <p>
                    Tanggapan
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Input Tanggapan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lihat Tanggapan</p>
                    </a>
                </li>
                </ul>
            </li>

          <li class="nav-header"><b>UMUM</b></li>
          <li class="nav-item has-treeview menu-{{Request::is('jenispengaduan')?'open':'close'}}">
                <a href="{{ url('/jenispengaduan') }}" class="nav-link warning {{ Request::is('jenispengaduan')?'active':'' }}">
                    <i class="nav-icon fas fa-align-justify"></i>
                    <p>
                        Jenis Pengaduan
                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview menu-{{Request::is('peraturan')?'open':'close'}}">
                <a href="{{ url('/peraturan') }}" class="nav-link warning {{ Request::is('peraturan')?'active':'' }}">
                <i class="nav-icon fas fa-align-justify"></i>
                <p>
                    Peraturan
                </p>
                </a>
            </li>

          <li class="nav-header"><b>REPORT</b></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Cetak Laporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Pengaduan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lap. Tanggapan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header"><b>DOKUMENTASI</b></li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                File Pengaduan
              </p>
            </a>
          </li>

          <li class="nav-header"><b>MANAGEMENT USER</b></li>
          <li class="nav-item">
            <a href="{{ url('/pengguna') }}" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Data User
              </p>
            </a>
          </li>

          {{--  <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link active">
                <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>Keluar</p>
            </a>
          </li>  --}}
        </ul>
      </nav>
    </div>
  </aside>
