<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.home') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Admin Panel</span></a></li>
            <li class="nav-item dropdown {{ Request::is('admin/page/about') || Request::is('admin/page/terms') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa fa-hand-o-right"></i><span>Sayfalar</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_about') }}"><i class="fa fa-angle-right"></i>Hakkımda</a></li>
                    <li class="{{ Request::is('admin/page/terms') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_terms') }}"><i class="fa fa-angle-right"></i>Şartlar ve Koşullar</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i>İletişim</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('admin/slide/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.slide_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Slayt</span></a></li>
            <li class="{{ Request::is('admin/feature/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.feature_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Icon</span></a></li>
            <li class="{{ Request::is('admin/testimonial/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.testimonial_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Referans</span></a></li>
            <li class="{{ Request::is('admin/post/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.post_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Blog</span></a></li>
            <li class="{{ Request::is('admin/photo/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.photo_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Photo Galeri</span></a></li>
            <li class="{{ Request::is('admin/video/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.video_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Video Galeri</span></a></li>
            <li class="{{ Request::is('admin/faq/*') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('admin.faq_view') }}"><i class="fa fa-hand-o-right"></i>
                    <span>FAQs</span></a></li>

        </ul>
    </aside>
</div>
