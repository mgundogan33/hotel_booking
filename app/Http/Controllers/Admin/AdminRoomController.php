<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\RoomPhoto;

class AdminRoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room_view', compact('rooms'));
    }
    public function add()
    {
        $all_amenities = Amenity::get();
        return view('admin.room_add', compact('all_amenities'));
    }
    public function store(Request $request)
    {
        $amenities = '';
        $i = 0;
        if (isset($request->arr_amenities)) {
            foreach ($request->arr_amenities as $item) {
                if ($i == 0) {
                    $amenities .= $item;
                } else {
                    $amenities .= $item;
                }
                $i++;
            }
        }

        $request->validate([
            'featured_photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'total_rooms' => 'required'
        ]);

        $ext = $request->file('featured_photo')->extension();
        $final_name = time()  .  '.'   .  $ext;
        $request->file('featured_photo')->move(public_path('uploads/'), $final_name);

        $obj = new Room();
        $obj->featured_photo = $final_name;
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->total_rooms = $request->total_rooms;
        $obj->amenities = $amenities;
        $obj->size = $request->size;
        $obj->total_beds = $request->total_beds;
        $obj->total_bathrooms = $request->total_bathrooms;
        $obj->total_balconies = $request->total_balconies;
        $obj->total_guests = $request->total_guests;
        $obj->video_id = $request->video_id;
        $obj->save();
        return redirect()->back()->with('success', 'Oda Bilgileri Başarıyla Kaydedildi ');
    }
    public function edit($id)
    {
        $all_amenities = Amenity::get();
        $room_data = Room::where('id', $id)->first();

        $existing_amenities = array();
        if ($room_data->amenities != '') {
            $existing_amenities = explode(',', $room_data->amenities);
        }

        return view('admin.room_edit', compact('room_data', 'all_amenities', 'existing_amenities'));
    }
    public function update(Request $request, $id)
    {
        $obj = Room::where('id', $id)->first();


        $amenities = '';
        $i = 0;
        if (isset($request->arr_amenities)) {
            $sayi = count($request->arr_amenities);
            foreach ($request->arr_amenities as $item) {
                $virgul = ($item == $sayi) ? '' : ',';
                if ($i == 0) {
                    $amenities .= $item . $virgul;
                } else {
                    $amenities .= $item . $virgul;
                }
                $i++;
            }
        }
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'total_rooms' => 'required'
        ]);

        if ($request->hasFile('featured_photo')) {
            $request->validate([
                'featured_photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink(public_path('uploads/' . $obj->featured_photo));
            $ext = $request->file('featured_photo')->extension();
            $final_name = time()  .  '.'   .  $ext;
            $request->file('featured_photo')->move(public_path('uploads/'), $final_name);
            $obj->featured_photo = $final_name;
        }
        $obj->name = $request->name;
        $obj->description = $request->description;
        $obj->price = $request->price;
        $obj->total_rooms = $request->total_rooms;
        $obj->amenities = $amenities;
        $obj->size = $request->size;
        $obj->total_beds = $request->total_beds;
        $obj->total_bathrooms = $request->total_bathrooms;
        $obj->total_balconies = $request->total_balconies;
        $obj->total_guests = $request->total_guests;
        $obj->video_id = $request->video_id;
        $obj->update();

        return redirect()->back()->with('success', 'Oda Başarıyla Güncellendi');
    }
    public function delete($id)
    {
        $single_data = Room::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_data->featured_photo));
        $single_data->delete();

        $room_photo_data = RoomPhoto::where('room_id', $id)->get();
        foreach ($room_photo_data as $item) {
            unlink(public_path('uploads/' . $item->photo));
            $item->delete();
        }

        return redirect()->back()->with('success', 'Oda Başarıyla Silindi');
    }
    public function galery($id)
    {
        $room_data = Room::where('id', $id)->first();
        $room_photos = RoomPhoto::where('room_id', $id)->get();
        return view('admin.room_galery', compact('room_data', 'room_photos'));
    }
    public function galery_store(Request $request, $id)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = time()  .  '.'   .  $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj = new RoomPhoto();
        $obj->photo = $final_name;
        $obj->room_id = $id;
        $obj->save();
        return redirect()->back()->with('success', 'Oda Fotoğrafı Başarıyla Kaydedildi ');
    }

    public function galery_delete($id)
    {
        $single_data = RoomPhoto::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_data->photo));
        $single_data->delete();
        return redirect()->back()->with('success', 'Oda Fotoğrafı Başarıyla Silindi');
    }
}
