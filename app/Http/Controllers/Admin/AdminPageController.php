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
}
