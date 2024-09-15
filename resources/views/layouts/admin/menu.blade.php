<!-- Sidebar Menu -->

@if (auth()->user()->role == 'admin')
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link text-white @yield('activeDashboard')">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        BERANDA
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link text-white @yield('activeUser')">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        PENGGUNA
                    </p>
                </a>
            </li>
            <li class="nav-item @yield('menuBooking_s') @yield('menuPackage_s')">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-film"></i>
                    <p>
                        STUDIO
                        <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="ps-2 small nav-item">
                        <a href="{{ route('admin.package_s.index') }}" class="nav-link text-white @yield('activePackage_s')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>PACKAGE</p>
                        </a>
                    </li>
                    <li class="ps-2 small nav-item">
                        <a href="{{ route('admin.booking_s.index') }}" class="nav-link text-white @yield('activeBooking_s')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>BOOKING ORDER</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('menuBooking_p') @yield('menuPackage_p')">
                <a href="#" class="nav-link text-white">
                    <i class="nav-icon fas fa-camera"></i>
                    <p>
                        PHOTOGRAPHER
                        <i class="fas fa-angle-right right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="ps-2 small nav-item">
                        <a href="{{ route('admin.package_p.index') }}" class="nav-link text-white @yield('activePackage_p')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>PACKAGE</p>
                        </a>
                    </li>
                    <li class="ps-2 small nav-item">
                        <a href="{{ route('admin.booking_p.index') }}" class="nav-link text-white @yield('activeBooking_p')">
                            <i class="far fa-circle nav-icon"></i>
                            <p>BOOKING ORDER</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link text-white @yield('activeCategory')">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                        KATEGORI
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.inventory.index') }}" class="nav-link text-white @yield('activeInventory')">
                    <i class="nav-icon fas fa-database"></i>
                    <p>
                        INVENTARIS
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.available.index') }}" class="nav-link text-white @yield('activeAvailable')">
                    <i class="nav-icon fas fa-camera"></i>
                    <p>
                        AVAILABLE
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                    @csrf
                </form>
                <a href="#" class="nav-link text-white @yield('')"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        LOGOUT
                    </p>
                </a>
            </li>
        </ul>
    </nav>
@endif

<!-- /.sidebar-menu -->
