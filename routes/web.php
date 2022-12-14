<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\RoomController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\PhotoController;
use App\Http\Controllers\Front\TermsController;
use App\Http\Controllers\Front\VideoController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\PrivacyController;
use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Front\SubscriberController;
use App\Http\Controllers\Admin\AdminAmenityController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSubscriberController;
use App\Http\Controllers\Admin\AdminTestmonialController;
use App\Http\Controllers\Customer\CustomerAuthController;
use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerProfileController;

/* Front */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/post/{id}', [BlogController::class, 'single_post'])->name('post');
Route::get('/photo-galery', [PhotoController::class, 'index'])->name('photo_galery');
Route::get('/video-galery', [VideoController::class, 'index'])->name('video_galery');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/terms-and-conditions', [TermsController::class, 'index'])->name('terms');
Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('privacy');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/send-email', [ContactController::class, 'send_email'])->name('contact_send_email');
Route::post('/subscriber/send-email', [SubscriberController::class, 'send_email'])->name('subscriber_send_email');
Route::get('/subscriber/verify/{email}/{token}', [SubscriberController::class, 'verify'])->name('subscriber_verify');
Route::get('/room', [RoomController::class, 'index'])->name('room');
Route::get('/room/{id}', [RoomController::class, 'single_room'])->name('room_detail');



/* Admin */
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login_submit', [AdminLoginController::class, 'login_submit'])->name('admin.login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin.forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin.forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin.reset_password');
Route::post('/admin/reset-password-submit/{token}/{email}', [AdminLoginController::class, 'reset_password_submit'])->name('admin.reset_password_submit');

/* Customer */
Route::get('/login', [CustomerAuthController::class, 'login'])->name('customer.login');
Route::post('/customer/login-submit', [CustomerAuthController::class, 'login_submit'])->name('customer.login_submit');
Route::get('/customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');
Route::get('/signup', [CustomerAuthController::class, 'signup'])->name('customer.signup');
Route::post('/signup-submit', [CustomerAuthController::class, 'signup_submit'])->name('customer.signup_submit');
Route::get('/signup-verify/{email}/{token}', [CustomerAuthController::class, 'signup_verify'])->name('customer.signup_verify');

Route::get('/forget-password', [CustomerAuthController::class, 'forget_password'])->name('customer.forget_password');
Route::post('/forget-password-submit', [CustomerAuthController::class, 'forget_password_submit'])->name('customer.forget_password_submit');
Route::get('/reset-password/{token}/{email}', [CustomerAuthController::class, 'reset_password'])->name('customer.reset_password');
Route::post('/reset-password-submit', [CustomerAuthController::class, 'reset_password_submit'])->name('customer.reset_password_submit');

/* Customer  Middleware*/
Route::group(['middleware' => ['customer:customer']], function () {
    Route::get('/customer/home', [CustomerHomeController::class, 'index'])->name('customer.home');
    Route::get('/customer/edit-profile', [CustomerProfileController::class, 'index'])->name('customer.profile');
    Route::post('/customer/edit-profile-submit', [CustomerProfileController::class, 'profile_submit'])->name('customer.profile_submit');

});


/* Admin  Middleware*/
Route::group(['middleware' => ['admin:admin']], function () {
    Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin.profile');
    Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin.profile_submit');

    Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin.slide_view');
    Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin.slide_add');
    Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin.slide_store');
    Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin.slide_edit');
    Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin.slide_update');
    Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin.slide_delete');

    Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin.feature_view');
    Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin.feature_add');
    Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin.feature_store');
    Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin.feature_edit');
    Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin.feature_update');
    Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin.feature_delete');

    Route::get('/admin/testimonial/view', [AdminTestmonialController::class, 'index'])->name('admin.testimonial_view');
    Route::get('/admin/testimonial/add', [AdminTestmonialController::class, 'add'])->name('admin.testimonial_add');
    Route::post('/admin/testimonial/store', [AdminTestmonialController::class, 'store'])->name('admin.testimonial_store');
    Route::get('/admin/testimonial/edit/{id}', [AdminTestmonialController::class, 'edit'])->name('admin.testimonial_edit');
    Route::post('/admin/testimonial/update/{id}', [AdminTestmonialController::class, 'update'])->name('admin.testimonial_update');
    Route::get('/admin/testimonial/delete/{id}', [AdminTestmonialController::class, 'delete'])->name('admin.testimonial_delete');

    Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin.post_view');
    Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin.post_add');
    Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin.post_store');
    Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post_edit');
    Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin.post_update');
    Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin.post_delete');

    Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin.photo_view');
    Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin.photo_add');
    Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin.photo_store');
    Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin.photo_edit');
    Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin.photo_update');
    Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin.photo_delete');

    Route::get('/admin/video/view', [AdminVideoController::class, 'index'])->name('admin.video_view');
    Route::get('/admin/video/add', [AdminVideoController::class, 'add'])->name('admin.video_add');
    Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin.video_store');
    Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin.video_edit');
    Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin.video_update');
    Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin.video_delete');

    Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin.faq_view');
    Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin.faq_add');
    Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin.faq_store');
    Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin.faq_edit');
    Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin.faq_update');
    Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin.faq_delete');

    Route::get('/admin/page/about', [AdminPageController::class, 'about'])->name('admin.page_about');
    Route::post('/admin/page/about/update', [AdminPageController::class, 'about_update'])->name('admin.page_about_update');

    Route::get('/admin/page/terms', [AdminPageController::class, 'terms'])->name('admin.page_terms');
    Route::post('/admin/page/terms/update', [AdminPageController::class, 'terms_update'])->name('admin.page_terms_update');

    Route::get('/admin/page/privacy', [AdminPageController::class, 'privacy'])->name('admin.page_privacy');
    Route::post('/admin/page/privacy/update', [AdminPageController::class, 'privacy_update'])->name('admin.page_privacy_update');

    Route::get('/admin/page/contact', [AdminPageController::class, 'contact'])->name('admin.page_contact');
    Route::post('/admin/page/contact/update', [AdminPageController::class, 'contact_update'])->name('admin.page_contact_update');

    Route::get('/admin/page/photo-galery', [AdminPageController::class, 'photo_galery'])->name('admin.page_photo_galery');
    Route::post('/admin/page/photo-galery/update', [AdminPageController::class, 'photo_galery_update'])->name('admin.page_photo_galery_update');

    Route::get('/admin/page/video-galery', [AdminPageController::class, 'video_galery'])->name('admin.page_video_galery');
    Route::post('/admin/page/video-galery/update', [AdminPageController::class, 'video_galery_update'])->name('admin.page_video_galery_update');

    Route::get('/admin/page/faq', [AdminPageController::class, 'faq'])->name('admin.page_faq');
    Route::post('/admin/page/faq/update', [AdminPageController::class, 'faq_update'])->name('admin.page_faq_update');

    Route::get('/admin/page/blog', [AdminPageController::class, 'blog'])->name('admin.page_blog');
    Route::post('/admin/page/blog/update', [AdminPageController::class, 'blog_update'])->name('admin.page_blog_update');

    Route::get('/admin/page/room', [AdminPageController::class, 'room'])->name('admin.page_room');
    Route::post('/admin/page/room/update', [AdminPageController::class, 'room_update'])->name('admin.page_room_update');

    Route::get('/admin/page/cart', [AdminPageController::class, 'cart'])->name('admin.page_cart');
    Route::post('/admin/page/cart/update', [AdminPageController::class, 'cart_update'])->name('admin.page_cart_update');

    Route::get('/admin/page/checkout', [AdminPageController::class, 'checkout'])->name('admin.page_checkout');
    Route::post('/admin/page/checkout/update', [AdminPageController::class, 'checkout_update'])->name('admin.page_checkout_update');

    Route::get('/admin/page/payment', [AdminPageController::class, 'payment'])->name('admin.page_payment');
    Route::post('/admin/page/payment/update', [AdminPageController::class, 'payment_update'])->name('admin.page_payment_update');

    Route::get('/admin/page/signup', [AdminPageController::class, 'signup'])->name('admin.page_signup');
    Route::post('/admin/page/signup/update', [AdminPageController::class, 'signup_update'])->name('admin.page_signup_update');

    Route::get('/admin/page/signin', [AdminPageController::class, 'signin'])->name('admin.page_signin');
    Route::post('/admin/page/signin/update', [AdminPageController::class, 'signin_update'])->name('admin.page_signin_update');

    Route::get('/admin/page/forget_password', [AdminPageController::class, 'forget_password'])->name('admin.page_forget_password');
    Route::post('/admin/page/forget_password/update', [AdminPageController::class, 'forget_password_update'])->name('admin.page_forget_password_update');

    Route::get('/admin/page/reset_password', [AdminPageController::class, 'reset_password'])->name('admin.page_reset_password');
    Route::post('/admin/page/reset_password/update', [AdminPageController::class, 'reset_password_update'])->name('admin.page_reset_password_update');

    Route::get('/admin/subscriber/show', [AdminSubscriberController::class, 'show'])->name('admin.subscriber_show');
    Route::get('/admin/subscriber/send-email', [AdminSubscriberController::class, 'send_email'])->name('admin.subscriber_send_email');
    Route::post('/admin/subscriber/send-email-submit', [AdminSubscriberController::class, 'send_email_submit'])->name('admin.subscriber_send_email_submit');

    Route::get('/admin/amenity/view', [AdminAmenityController::class, 'index'])->name('admin.amenity_view');
    Route::get('/admin/amenity/add', [AdminAmenityController::class, 'add'])->name('admin.amenity_add');
    Route::post('/admin/amenity/store', [AdminAmenityController::class, 'store'])->name('admin.amenity_store');
    Route::get('/admin/amenity/edit/{id}', [AdminAmenityController::class, 'edit'])->name('admin.amenity_edit');
    Route::post('/admin/amenity/update/{id}', [AdminAmenityController::class, 'update'])->name('admin.amenity_update');
    Route::get('/admin/amenity/delete/{id}', [AdminAmenityController::class, 'delete'])->name('admin.amenity_delete');

    Route::get('/admin/room/view', [AdminRoomController::class, 'index'])->name('admin.room_view');
    Route::get('/admin/room/add', [AdminRoomController::class, 'add'])->name('admin.room_add');
    Route::post('/admin/room/store', [AdminRoomController::class, 'store'])->name('admin.room_store');
    Route::get('/admin/room/edit/{id}', [AdminRoomController::class, 'edit'])->name('admin.room_edit');
    Route::post('/admin/room/update/{id}', [AdminRoomController::class, 'update'])->name('admin.room_update');
    Route::get('/admin/room/delete/{id}', [AdminRoomController::class, 'delete'])->name('admin.room_delete');
    Route::get('/admin/room/galery/{id}', [AdminRoomController::class, 'galery'])->name('admin.room_galery');
    Route::post('/admin/room/galery/store/{id}', [AdminRoomController::class, 'galery_store'])->name('admin.room_galery_store');
    Route::get('/admin/room/galery/delete/{id}', [AdminRoomController::class, 'galery_delete'])->name('admin.room_galery_delete');
});
