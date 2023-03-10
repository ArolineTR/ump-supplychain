<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        {{-- <img src="/koptiLogo.jpg" width="50px" alt="Logo Kopti"> --}}
        <div class="sidebar-brand-text mx-1.5">2ReLogCarChain</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/home') ? 'active' : '' }}">
        <a class="nav-link {{ Request::is('/home') ? 'active' : '' }}" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item {{ Request::is('transaksi') || Request::is('persediaan') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Perkembangan Bisnis</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ Request::is('transaksi') ? 'active' : '' }}" href="/transaksi">Transaksi Bisnis</a>
                <a class="collapse-item {{ Request::is('persediaan') ? 'active' : '' }}" href="/persediaan">Stok Barang</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ Request::is('agen') || Request::is('agen/create') || Request::is('agen/*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Staff</span>
        </a>
        @if(Auth::user()->role =='0')
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Fitur Keagenan:</h6> --}}
                <a class="collapse-item {{ Request::is('agen/create') ? 'active' : '' }}" href="{{ url('/agen/create') }}">Add Staff</a>
                <a class="collapse-item {{ Request::is('agen') or Request::is('agen/[1-99999]')  ? 'active' : '' }}" href="/agen">Staff List</a>
            </div>
        </div>
        @elseif(Auth::user()->role =='1')
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Fitur Keagenan:</h6> --}}
                <a class="collapse-item {{ Request::is('agen/create') ? 'active' : '' }}" href="{{ url('/agen/create') }}">Add Staff</a>
                <a class="collapse-item {{ Request::is('agen') or Request::is('agen/[1-99999]')  ? 'active' : '' }}" href="/agen">Staff List</a>
            </div>
        </div>
        @else
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- <h6 class="collapse-header">Fitur Keagenan:</h6> --}}
                <a class="collapse-item" href="{{ url('#') }}">No Access</a>
            </div>
        </div>
        @endif
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('persediaan') || Request::is('persediaan') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Components</span>
        </a>
        
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            @if(Auth::user()->role =='0')
                <a class="collapse-item {{ Request::is('persediaan/create') ? 'active' : '' }}" href="/persediaan/create">Add Components</a>
                <a class="collapse-item {{ Request::is('persediaan') ? 'active' : '' }}" href="/persediaan">Components List</a>
            @elseif(Auth::user()->role =='1')
                <a class="collapse-item {{ Request::is('persediaan/create') ? 'active' : '' }}" href="/persediaan/create">Add Components</a>
                <a class="collapse-item {{ Request::is('persediaan') ? 'active' : '' }}" href="/persediaan">Components List</a>
            @else
                <a class="collapse-item" href="{{ url('#') }}">No Access</a>
            @endif
            </div>
        </div>
       
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('produk') || Request::is('katalog') ? 'active' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Product</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            @if(Auth::user()->role =='0')
                <a class="collapse-item {{ Request::is('produk') ? 'active' : '' }}" href="/produk">List Product</a>
                <a class="collapse-item {{ Request::is('produk/create') ? 'active' : '' }}" href="/produk">Add Product</a>
                <a class="collapse-item {{ Request::is('katalog/create') ? 'active' : '' }}" href="/katalog/create">Send Product</a>
            @elseif(Auth::user()->role =='1')
                <a class="collapse-item {{ Request::is('produk') ? 'active' : '' }}" href="/produk">List Product</a>
                <a class="collapse-item {{ Request::is('produk/create') ? 'active' : '' }}" href="/produk/create">Add Product</a>
                <a class="collapse-item {{ Request::is('katalog/create') ? 'active' : '' }}" href="/katalog/create">Send Product</a>
            @else
                <a class="collapse-item {{ Request::is('produk') ? 'active' : '' }}" href="/produk">List Product</a>
            @endif
                
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed {{ Request::is('profil') ? 'active' : '' }}" href="/profile">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Profil</span></a>
    </li> --}}

    <!-- Nav Item - Tables -->
    {{-- <li class="nav-item">
        <a class="nav-link" href="/helpdesk">
            <i class="fas fa-fw fa-table"></i>
            <span>CRM</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <!--<div class="sidebar-card d-none d-lg-flex">-->
    <!--    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">-->
    <!--    <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>-->
    <!--    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>-->
    <!--</div>-->

</ul>
<!-- End of Sidebar -->
