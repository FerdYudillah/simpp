<ul class="menu-inner py-1">

    <!-- Dashboard -->
    <li class="menu-item  @yield('home') ">
      <a href="/home" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Home</div>
      </a>
    </li>


    <!-- Layouts -->
    <li class="menu-item @yield('main')">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="Layouts">Data Pegawai</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item @yield('pegawai') ">
          <a href="/pegawai" class="menu-link">
            <div data-i18n="Without menu">Data PNS</div>
          </a>
        </li>
        <li class="menu-item @yield('anak')">
          <a href="/anak" class="menu-link">
            <div data-i18n="Without navbar">Data Anak PNS</div>
          </a>
        </li>
        <li class="menu-item @yield('suami_istri')">
          <a href="/suami_istri" class="menu-link">
            <div data-i18n="Container">Data Suami/Istri PNS</div>
          </a>
        </li>
        <li class="menu-item @yield('non_pns')">
          <a href="/non_pns" class="menu-link">
            <div data-i18n="Container">Data Non PNS</div>
          </a>
        </li>
      </ul>
    </li>

    @can('admin')  
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text"></span>
    </li>

    <li class="menu-item @yield('dm')">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-file"></i>
        <div data-i18n="Layouts">Data Master</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item @yield('pangkat')">
          <a href="/pangkat" class="menu-link">
            <div data-i18n="Without menu">Pangkat</div>
          </a>
        </li>
        <li class="menu-item @yield('golongan')">
          <a href="/golongan" class="menu-link">
            <div data-i18n="Without navbar">Golongan</div>
          </a>
        </li>
        <li class="menu-item @yield('jabatan')">
          <a href="/jabatan" class="menu-link ">
            <div data-i18n="Container">Jabatan</div>
          </a>
        </li>
      </ul>
    </li>
    @endcan

     <li class="menu-item @yield('kp')">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-receipt"></i>
        <div data-i18n="Layouts">Kepegawaian</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item @yield('naik_berkala')">
          <a href="/naik_berkala" class="menu-link">
            <div data-i18n="Without menu">Data Kenaikan Gaji Berkala PNS</div>
          </a>
        </li>
        <li class="menu-item @yield('naik_pangkat')">
          <a href="/naik_pangkat" class="menu-link">
            <div data-i18n="Without navbar">Data Kenaikan Pangkat PNS</div>
          </a>
        </li>
      </ul>
    </li>
    

    <div>
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text"></span>
      </li>
    </div>
    <li class="menu-item @yield('ds')">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx bx-user-pin"></i>
        <div data-i18n="Layouts">Data User</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item @yield('data_diri')">
          <a href="/akun" class="menu-link">
            <div data-i18n="Without menu">Data Diri</div>
          </a>
        </li>
        @can('admin')
        <li class="menu-item @yield('pesan')">
          <a href="/pesan" class="menu-link">
            <div data-i18n="Without navbar">Pesan</div>
          </a>
        </li>
        <li class="menu-item  @yield('user')">
          <a href="/user" class="menu-link">
            <div data-i18n="Analytics">Daftar User</div>
          </a>
        </li>
        @endcan
      </ul>
    </li>

    

    <li class="menu-item ">
      <a href="{{ url('logout') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-log-out-circle"></i>
        <div data-i18n="Analytics">Logout</div>
      </a>
    </li>


  </ul>

