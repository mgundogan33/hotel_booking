<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminTestmonialController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;

/* Front */

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');



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



