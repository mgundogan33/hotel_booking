<?php

namespace App\Http\Controllers\Front;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index()
    {
        $photo_all = Photo::paginate(12);
        return view('front.photo_galery', compact('photo_all'));
    }
}
