<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class AdminTestmonialController extends Controller
{
    public function index()
    {
        $testimonals = Testmonial::all();
        return view('admin.testimonial_view', compact('testimonals'));
    }
    public function add()
    {
        return view('admin.testimonial_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time()  .  '.'   .  $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj = new Testmonial();
        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->save();
        return redirect()->back()->with('success', 'İşlem Başarıyla Kaydedildi ');
    }
    public function edit($id)
    {
        $testimonial_data = Testmonial::where('id', $id)->first();

        return view('admin.testimonial_edit', compact('testimonial_data'));
    }
    public function update(Request $request, $id)
    {
        $obj = Testmonial::where('id', $id)->first();

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $obj->photo));
            $ext = $request->file('photo')->extension();
            $final_name = time()  .  '.'   .  $ext;
            $request->file('photo')->move(public_path('uploads/'), $final_name);
            $obj->photo = $final_name;
        }
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->update();

        return redirect()->back()->with('success', 'Başarıyla Güncellendi');
    }
    public function delete($id)
    {
        $testimonial_data = Testmonial::where('id', $id)->first();
        unlink(public_path('uploads/' . $testimonial_data->photo));
        $testimonial_data->delete();
        return redirect()->back()->with('error', 'Başarıyla Silindi');
    }
}
