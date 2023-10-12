<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">

            <div class="sidenav-menu-heading">Wellcome {{ auth()->user()->nama_lengkap ?? auth()->user()->username }}</div>

                <x-sidebar-item route="admin.dashboard" title="Beranda" icon="home" />
                <x-sidebar-item route="admin.kegiatan-siswa" title="Kegiatan Siswa" icon="check-square" />
                <x-sidebar-item route="admin.siswa" title="Master Data Siswa" icon="users" />
                <x-sidebar-item route="admin.data-kegiatan" title="Master Data Kegiatan" icon="archive" />


            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="nav-link" type="submit">
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
            <div class="sidenav-footer-title">{{ auth()->user()->nama_lengkap ?? auth()->user()->username }}</div>
        </div>
    </div>
</nav>

