<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.home') }}"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{ route('admin.home') }}"><i class="fa fa-hand-o-right"></i>
                    <span>Admin Panel</span></a></li>
            {{-- <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-hand-o-right"></i><span>Dropdown
                        Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fa fa-angle-right"></i>
                            Item 1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fa fa-angle-right"></i>
                            Item 2</a></li>
                </ul>
            </li> --}}

            <li class=""><a class="nav-link" href="{{ route('admin.slide_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Slayt</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin.feature_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Icon</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin.testimonial_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Referans</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin.post_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Gönderi</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin.photo_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Photo Galeri</span></a></li>
            <li class=""><a class="nav-link" href="{{ route('admin.video_view') }}"><i
                        class="fa fa-hand-o-right"></i>
                    <span>Video Galeri</span></a></li>
        </ul>
    </aside>
</div>
