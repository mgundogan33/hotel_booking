<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function about()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_about', compact('page_data'));
    }
    public function about_update(Request $request)
    {

        $obj = Page::where('id', 1)->first();
        $obj->about_heading = $request->about_heading;
        $obj->about_content = $request->about_content;
        $obj->about_status = $request->about_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }

    public function terms()
    {
        $terms_data = Page::where('id', 1)->first();
        return view('admin.page_terms', compact('terms_data'));
    }
    public function terms_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->terms_heading = $request->terms_heading;
        $obj->terms_content = $request->terms_content;
        $obj->terms_status = $request->terms_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function privacy()
    {
        $privacy_data = Page::where('id', 1)->first();
        return view('admin.page_privacy', compact('privacy_data'));
    }
    public function privacy_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->privacy_heading = $request->privacy_heading;
        $obj->privacy_content = $request->privacy_content;
        $obj->privacy_status = $request->privacy_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function contact()
    {
        $contact_data = Page::where('id', 1)->first();
        return view('admin.page_contact', compact('contact_data'));
    }
    public function contact_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->contact_heading = $request->contact_heading;
        $obj->contact_map = $request->contact_map;
        $obj->contact_status = $request->contact_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function photo_galery()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_photo_galery', compact('page_data'));
    }
    public function photo_galery_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->photo_galery_heading = $request->photo_galery_heading;
        $obj->photo_galery_status = $request->photo_galery_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function video_galery()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_video_galery', compact('page_data'));
    }
    public function video_galery_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->video_galery_heading = $request->video_galery_heading;
        $obj->video_galery_status = $request->video_galery_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function faq()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_faq', compact('page_data'));
    }
    public function faq_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->faq_heading = $request->faq_heading;
        $obj->faq_status = $request->faq_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
    public function blog()
    {
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_blog', compact('page_data'));
    }
    public function blog_update(Request $request)
    {
        $obj = Page::where('id', 1)->first();
        $obj->blog_heading = $request->blog_heading;
        $obj->blog_status = $request->blog_status;
        $obj->update();

        return redirect()->back()->with('success', 'İşlem Başarıyla Gerçekleşti');
    }
}
