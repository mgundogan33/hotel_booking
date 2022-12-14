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

            <li
                class="nav-item dropdown {{ Request::is('admin/amenity/view') || Request::is('admin/amenity/view') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa fa-hand-o-right"></i><span>Otel Olanakları</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/amenity/view') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.amenity_view') }}"><i
                                class="fa fa-angle-right"></i>Otel Odası Olanakları</a>
                    </li>
                    <li class="{{ Request::is('admin/room/view') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.room_view') }}"><i class="fa fa-angle-right"></i>Odalar</a>
                    </li>
                </ul>
            </li>



            <li
                class="nav-item dropdown {{ Request::is('admin/page/about') ||
                Request::is('admin/page/terms') ||
                Request::is('admin/page/privacy') ||
                Request::is('admin/page/contact') ||
                Request::is('admin/page/photo-galery') ||
                Request::is('admin/page/video-galery') ||
                Request::is('admin/page/faq') ||
                Request::is('admin/page/blog') ||
                Request::is('admin/page/room') ||
                Request::is('admin/page/cart') ||
                Request::is('admin/page/payment') ||
                Request::is('admin/page/checkout') ||
                Request::is('admin/page/signup') ||
                Request::is('admin/page/signin')||
                Request::is('admin/page/forget_password')||
                Request::is('admin/page/reset_password')
                    ? 'active'
                    : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa fa-hand-o-right"></i><span>Sayfa Başlıkları</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/page/about') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_about') }}"><i class="fa fa-angle-right"></i>Hakkımda</a></li>
                    <li class="{{ Request::is('admin/page/terms') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_terms') }}"><i class="fa fa-angle-right"></i>Şartlar ve
                            Koşullar</a></li>
                    <li class="{{ Request::is('admin/page/privacy') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_privacy') }}"><i class="fa fa-angle-right"></i>Gizlilik
                            Politikası</a></li>
                    <li class="{{ Request::is('admin/page/contact') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_contact') }}"><i class="fa fa-angle-right"></i>Bize Ulaşın </a>
                    </li>
                    <li class="{{ Request::is('admin/page/photo-galery') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_photo_galery') }}"><i class="fa fa-angle-right"></i>Foto
                            Galeri</a>
                    <li class="{{ Request::is('admin/page/video-galery') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_video_galery') }}"><i class="fa fa-angle-right"></i>Video
                            Galeri</a>
                    </li>
                    <li class="{{ Request::is('admin/page/faq') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_faq') }}"><i class="fa fa-angle-right"></i>FAQ</a>
                    <li class="{{ Request::is('admin/page/blog') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_blog') }}"><i class="fa fa-angle-right"></i>Blog</a>
                    </li>
                    <li class="{{ Request::is('admin/page/room') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_room') }}"><i class="fa fa-angle-right"></i>Odalar</a>
                    </li>
                    <li class="{{ Request::is('admin/page/cart') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_cart') }}"><i class="fa fa-angle-right"></i>Kart</a>
                    </li>
                    <li class="{{ Request::is('admin/page/checkout') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_checkout') }}"><i class="fa fa-angle-right"></i>Ödeme
                            Kontrol</a>
                    </li>
                    <li class="{{ Request::is('admin/page/payment') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_payment') }}"><i class="fa fa-angle-right"></i>Ödeme</a>
                    </li>
                    <li class="{{ Request::is('admin/page/signup') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_signup') }}"><i class="fa fa-angle-right"></i>Kayıt Ol</a>
                    </li>
                    <li class="{{ Request::is('admin/page/signin') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_signin') }}"><i class="fa fa-angle-right"></i>Giriş Yap</a>
                    </li>
                    <li class="{{ Request::is('admin/page/forget_password') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_forget_password') }}"><i class="fa fa-angle-right"></i>Şifre İşlemleri</a>
                    </li>
                    <li class="{{ Request::is('admin/page/reset_password') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.page_reset_password') }}"><i class="fa fa-angle-right"></i>Şifre Yenile</a>
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



            <li
                class="nav-item dropdown {{ Request::is('admin/subscriber/show') || Request::is('admin/subscriber/show') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i
                        class="fa fa-hand-o-right"></i><span>Aboneler</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/subscriber/show') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.subscriber_show') }}"><i class="fa fa-angle-right"></i>Aboneler</a>
                    </li>
                    <li class="{{ Request::is('admin/subscriber/send-email') ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.subscriber_send_email') }}"><i
                                class="fa fa-angle-right"></i>E-posta Gönder</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
