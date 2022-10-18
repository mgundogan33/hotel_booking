<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('customer.home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('customer.home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('customer/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('customer.home') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Admin Panel</span></a></li>

            {{-- <li
                class="nav-item dropdown {{ Request::is('admin/amenity/view') || Request::is('admin/amenity/view') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa fa-hand-o-right"></i><span>Aboneler</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/amenity/view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.amenity_view') }}"><i
                                class="fa fa-angle-right"></i>Otel Odası Olanakları</a>
                    </li>
                    <li class="{{ Request::is('admin/room/view') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.room_view') }}"><i class="fa fa-angle-right"></i>Odalar</a>
                    </li>
                </ul>
            </li> --}}

            {{-- <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.faq_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>FAQs</span></a></li> --}}

        </ul>
    </aside>
</div>
