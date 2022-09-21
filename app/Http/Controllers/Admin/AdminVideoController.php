<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class AdminVideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('admin.video_view', compact('videos'));
    }
    public function add()
    {
        return view('admin.video_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required'

        ]);
        $obj = new Video();
        $obj->video_id = $request->video_id;
        $obj->caption = $request->caption;
        $obj->save();
        return redirect()->back()->with('success', 'Video Başarıyla Kaydedildi ');
    }
    public function edit($id)
    {
        $video_data = Video::where('id', $id)->first();

        return view('admin.video_edit', compact('video_data'));
    }
    public function update(Request $request, $id)
    {
        $obj = Video::where('id', $id)->first();
        $obj->video_id = $request->video_id;
        $obj->caption = $request->caption;
        $obj->update();

        return redirect()->back()->with('success', 'Video Başarıyla Güncellendi');
    }
    public function delete($id)
    {
        $single_data = Video::where('id', $id)->first();
        $single_data->delete();
        return redirect()->back()->with('error', 'Video Başarıyla Silindi');
    }
}
