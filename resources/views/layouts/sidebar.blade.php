<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
<!-- Menu Manage Guru -->
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#guru-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Manage Guru</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="guru-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('input.guru') }}">
                <i class="bi bi-circle"></i><span>Tambah Data</span>
            </a>
        </li>
        <li>
          <a href="{{ route('guru.data') }}">
              <i class="bi bi-circle"></i><span>Lihat Data</span>
          </a>
        </li>
    </ul>
  </li>

  <!-- Menu Manage Siswa -->
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Manage Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="siswa-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('input.siswa')}}">
                <i class="bi bi-circle"></i><span>Tambah Data</span>
            </a>
        </li>
        <li>
          <a href="{{ route('siswa.data')}}">
              <i class="bi bi-circle"></i><span>Lihat Data</span>
          </a>
        </li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#kelas-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Manage Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="kelas-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('input.kelas')}}">
                <i class="bi bi-circle"></i><span>Tambah Data</span>
            </a>
        </li>
        <li>
          <a href="{{ route('kelas.index') }}">
              <i class="bi bi-circle"></i><span>Lihat Data</span>
          </a>
        </li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#rekap-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-file-earmark-text"></i><span>Rekap</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="rekap-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('input.rekap') }}">
                <i class="bi bi-circle"></i><span>Tambah Data</span>
            </a>
        </li>
        <li>
            <a href="{{ route("rekap.data") }}">
                <i class="bi bi-circle"></i><span>Lihat Data Data</span>
            </a>
        </li>
    </ul>
</li>



      {{-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul> --}}

  </aside>