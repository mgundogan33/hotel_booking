<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fa fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="nav-link">
            <a href="" target="_blank" class="btn btn-warning">Ön Panel</a>
        </li>
        <li class="dropdown">
            @auth
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img src="{{ asset('uploads/' . Auth::guard('customer')->user()->photo) }}" alt="image">
                    <div class="d-sm-none d-lg-inline-block">{{ Auth::guard('customer')->user()->name }}</div>
                </a>
            @endauth
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('customer.profile') }}" class="dropdown-item has-icon">
                    <i class="fa fa-user"></i> Profili Düzenle
                </a>
                <a href="{{ route('customer.logout') }}" class="dropdown-item has-icon text-danger">
                    <i class="fa fa-sign-out"></i> Çıkış
                </a>
            </div>
        </li>
    </ul>
</nav>
