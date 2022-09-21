<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;

class AdminPhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('admin.photo_view', compact('photos'));
    }
    public function add()
    {
        return view('admin.photo_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'

        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time()  .  '.'   .  $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);
        $obj = new Photo();

        $obj->photo = $final_name;
        $obj->caption = $request->caption;
        $obj->save();
        return redirect()->back()->with('success', 'Fotoğraf Başarıyla Kaydedildi ');
    }
    public function edit($id)
    {
        $photo_data = Photo::where('id', $id)->first();

        return view('admin.photo_edit', compact('photo_data'));
    }
    public function update(Request $request, $id)
    {
        $obj = Photo::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $obj->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time()  .  '.'   .  $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $obj->photo = $final_name;
        }
        $obj->caption = $request->caption;
        $obj->update();

        return redirect()->back()->with('success', 'Başarıyla Güncellendi');
    }
    public function delete($id)
    {
        $photo_data = Photo::where('id', $id)->first();
        unlink(public_path('uploads/' . $photo_data->photo));
        $photo_data->delete();
        return redirect()->back()->with('error', 'Fotoğraf Başarıyla Silindi');
    }
}
