<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FaqController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\HomeController;
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
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminTestmonialController;

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



/* Admin */
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login_submit', [AdminLoginController::class, 'login_submit'])->name('admin.login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin.forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin.forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin.reset_password');
Route::post('/admin/reset-password-submit/{token}/{email}', [AdminLoginController::class, 'reset_password_submit'])->name('admin.reset_password_submit');
Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin.profile')->middleware('admin:admin');
Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin.profile_submit');

Route::get('/admin/slide/view', [AdminSlideController::class, 'index'])->name('admin.slide_view')->middleware('admin:admin');
Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin.slide_add')->middleware('admin:admin');
Route::post('/admin/slide/store', [AdminSlideController::class, 'store'])->name('admin.slide_store')->middleware('admin:admin');
Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin.slide_edit')->middleware('admin:admin');
Route::post('/admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin.slide_update')->middleware('admin:admin');
Route::get('/admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin.slide_delete')->middleware('admin:admin');

Route::get('/admin/feature/view', [AdminFeatureController::class, 'index'])->name('admin.feature_view')->middleware('admin:admin');
Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin.feature_add')->middleware('admin:admin');
Route::post('/admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin.feature_store')->middleware('admin:admin');
Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin.feature_edit')->middleware('admin:admin');
Route::post('/admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin.feature_update')->middleware('admin:admin');
Route::get('/admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin.feature_delete')->middleware('admin:admin');

Route::get('/admin/testimonial/view', [AdminTestmonialController::class, 'index'])->name('admin.testimonial_view')->middleware('admin:admin');
Route::get('/admin/testimonial/add', [AdminTestmonialController::class, 'add'])->name('admin.testimonial_add')->middleware('admin:admin');
Route::post('/admin/testimonial/store', [AdminTestmonialController::class, 'store'])->name('admin.testimonial_store')->middleware('admin:admin');
Route::get('/admin/testimonial/edit/{id}', [AdminTestmonialController::class, 'edit'])->name('admin.testimonial_edit')->middleware('admin:admin');
Route::post('/admin/testimonial/update/{id}', [AdminTestmonialController::class, 'update'])->name('admin.testimonial_update')->middleware('admin:admin');
Route::get('/admin/testimonial/delete/{id}', [AdminTestmonialController::class, 'delete'])->name('admin.testimonial_delete')->middleware('admin:admin');

Route::get('/admin/post/view', [AdminPostController::class, 'index'])->name('admin.post_view')->middleware('admin:admin');
Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin.post_add')->middleware('admin:admin');
Route::post('/admin/post/store', [AdminPostController::class, 'store'])->name('admin.post_store')->middleware('admin:admin');
Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin.post_edit')->middleware('admin:admin');
Route::post('/admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin.post_update')->middleware('admin:admin');
Route::get('/admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin.post_delete')->middleware('admin:admin');

Route::get('/admin/photo/view', [AdminPhotoController::class, 'index'])->name('admin.photo_view')->middleware('admin:admin');
Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin.photo_add')->middleware('admin:admin');
Route::post('/admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin.photo_store')->middleware('admin:admin');
Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin.photo_edit')->middleware('admin:admin');
Route::post('/admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin.photo_update')->middleware('admin:admin');
Route::get('/admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin.photo_delete')->middleware('admin:admin');

Route::get('/admin/video/view', [AdminVideoController::class, 'index'])->name('admin.video_view')->middleware('admin:admin');
Route::get('/admin/video/add', [AdminVideoController::class, 'add'])->name('admin.video_add')->middleware('admin:admin');
Route::post('/admin/video/store', [AdminVideoController::class, 'store'])->name('admin.video_store')->middleware('admin:admin');
Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin.video_edit')->middleware('admin:admin');
Route::post('/admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin.video_update')->middleware('admin:admin');
Route::get('/admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin.video_delete')->middleware('admin:admin');

Route::get('/admin/faq/view', [AdminFaqController::class, 'index'])->name('admin.faq_view')->middleware('admin:admin');
Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin.faq_add')->middleware('admin:admin');
Route::post('/admin/faq/store', [AdminFaqController::class, 'store'])->name('admin.faq_store')->middleware('admin:admin');
Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin.faq_edit')->middleware('admin:admin');
Route::post('/admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin.faq_update')->middleware('admin:admin');
Route::get('/admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin.faq_delete')->middleware('admin:admin');

Route::get('/admin/page/about', [AdminPageController::class, 'about'])->name('admin.page_about')->middleware('admin:admin');
Route::post('/admin/page/about/update', [AdminPageController::class, 'about_update'])->name('admin.page_about_update')->middleware('admin:admin');

Route::get('/admin/page/terms', [AdminPageController::class, 'terms'])->name('admin.page_terms')->middleware('admin:admin');
Route::post('/admin/page/terms/update', [AdminPageController::class, 'terms_update'])->name('admin.page_terms_update')->middleware('admin:admin');

Route::get('/admin/page/privacy', [AdminPageController::class, 'privacy'])->name('admin.page_privacy')->middleware('admin:admin');
Route::post('/admin/page/privacy/update', [AdminPageController::class, 'privacy_update'])->name('admin.page_privacy_update')->middleware('admin:admin');

Route::get('/admin/page/contact', [AdminPageController::class, 'contact'])->name('admin.page_contact')->middleware('admin:admin');
Route::post('/admin/page/contact/update', [AdminPageController::class, 'contact_update'])->name('admin.page_contact_update')->middleware('admin:admin');

Route::get('/admin/page/photo-galery', [AdminPageController::class, 'photo_galery'])->name('admin.page_photo_galery')->middleware('admin:admin');
Route::post('/admin/page/photo-galery/update', [AdminPageController::class, 'photo_galery_update'])->name('admin.page_photo_galery_update')->middleware('admin:admin');

Route::get('/admin/page/video-galery', [AdminPageController::class, 'video_galery'])->name('admin.page_video_galery')->middleware('admin:admin');
Route::post('/admin/page/video-galery/update', [AdminPageController::class, 'video_galery_update'])->name('admin.page_video_galery_update')->middleware('admin:admin');

Route::get('/admin/page/faq', [AdminPageController::class, 'faq'])->name('admin.page_faq')->middleware('admin:admin');
Route::post('/admin/page/faq/update', [AdminPageController::class, 'faq_update'])->name('admin.page_faq_update')->middleware('admin:admin');

Route::get('/admin/page/blog', [AdminPageController::class, 'blog'])->name('admin.page_blog')->middleware('admin:admin');
Route::post('/admin/page/blog/update', [AdminPageController::class, 'blog_update'])->name('admin.page_blog_update')->middleware('admin:admin');
