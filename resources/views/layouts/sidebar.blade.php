<div class="sidebar">

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard')? 'active' : ''}}">
                    <i class="bi bi-columns-gap"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            {{-- <li class="nav-header">Data Pengguna</li>
            <li class="nav-item">
                <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level')? 'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>Level User</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user')? 
            'active' : '' }}">
                    <i class="nav-icon far fa-user"></i>
                    <p>Data User</p>
                </a>
            </li> --}}

            <li class="nav-item has-treeview {{ ($activeMenu == 'level' || $activeMenu == 'user') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="bi bi-people"></i>
                    <p>
                        Data Pengguna
                        <i class="right bi bi-caret-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level') ? 'active' : '' }}">
                            <i class="bi bi-person"></i>
                            <p>Level User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : '' }}">
                            <i class="bi bi-person"></i>
                            <p>Data User</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($activeMenu == 'kategori' || $activeMenu == 'barang' || $activeMenu == 'stok') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="bi bi-boxes"></i>
                    <p>
                        Data Barang
                        <i class="right bi bi-caret-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/kategori') }}"
                            class="nav-link {{ ($activeMenu == 'kategori') ? 'active' : '' }}">
                            <i class="bi bi-collection"></i>
                            <p>Kategori Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/barang') }}" class="nav-link {{ ($activeMenu == 'barang') ? 'active' : '' }}">
                            <i class="bi bi-list-ul"></i>
                            <p>Data Barang</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/stok') }}" class="nav-link {{ ($activeMenu == 'stok') ? 'active' : '' }}">
                            <i class="bi bi-box2"></i>
                            <p>Stok Barang</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($activeMenu == 'penjualan' || $activeMenu == 'detailpenjualan') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="bi bi-cash"></i>
                    <p>
                        Data Transaksi
                        <i class="right bi bi-caret-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/penjualan') }}"
                            class="nav-link {{ ($activeMenu == 'penjualan') ? 'active' : '' }}">
                            <i class="bi bi-credit-card-2-front"></i>
                            <p>Transaksi Penjualan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/detailpenjualan') }}" class="nav-link {{ ($activeMenu == 'detailpenjualan') ? 'active' : '' }}">
                            <i class="bi bi-calculator"></i>
                            <p>Detail Penjualan</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($activeMenu == 'supplier') ? 'menu-open' : '' }}">
                <a href="#" class="nav-link">
                    <i class="bi bi-truck"></i>
                    <p>
                        Data Pengiriman
                        <i class="right bi bi-caret-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('/supplier') }}"
                            class="nav-link {{ ($activeMenu == 'supplier') ? 'active' : '' }}">
                            <i class="bi bi-box-seam"></i>
                            <p>Supplier</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>        
    </nav>
    <!-- /.sidebar-menu -->
</div>