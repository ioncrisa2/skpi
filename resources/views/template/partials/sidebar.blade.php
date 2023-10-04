<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">

            <div class="sidenav-menu-heading">Wellcome {{ auth()->user()->nama_lengkap }}</div>

            <x-sidebar-item route="dashboard" title="Beranda" icon="home"/>
            <x-sidebar-item route="dashboard" title="Kegiatan Siswa" icon="check-square"/>
            <x-sidebar-item route="dashboard" title="Cetak Kegiatan" icon="printer"/>
            <x-sidebar-item route="dashboard" title="Daftar Kegiatan" icon="list" />
            <x-sidebar-item route="dashboard" title="Profil" icon="user" />

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="nav-link" type="submit" onclick="return confirm('Apakah yakin ingin keluar??')">
                    <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                    Logout
                </button>
            </form>


        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">{{ auth()->user()->nama_lengkap }}</div>
        </div>
    </div>
</nav>
