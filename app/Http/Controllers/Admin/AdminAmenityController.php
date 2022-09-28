<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AdminAmenityController extends Controller
{
    public function index()
    {
        $amenities = Amenity::get();
        return view('admin.amenity_view', compact('amenities'));
    }
    public function add()
    {
        return view('admin.amenity_add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $obj = new Amenity();
        $obj->name = $request->name;
        $obj->save();
        return redirect()->back()->with('success', 'Başarıyla Kaydedildi ');
    }
    public function edit($id)
    {
        $amenity_data = Amenity::where('id', $id)->first();

        return view('admin.amenity_edit', compact('amenity_data'));
    }
    public function update(Request $request, $id)
    {
        $amenity_data = Amenity::where('id', $id)->first();
        $amenity_data->name = $request->name;
        $amenity_data->update();

        return redirect()->back()->with('success', 'Başarıyla Güncellendi');
    }
    public function delete($id)
    {
        $amenity_data = Amenity::where('id', $id)->first();
        $amenity_data->delete();
        return redirect()->back()->with('error', 'Başarıyla Silindi');
    }
}
