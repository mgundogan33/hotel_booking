<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Room;
use App\Models\Slide;
use App\Models\Feature;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $slide_all = Slide::get();
        $feature_all = Feature::get();
        $testimonial_all = Testmonial::get();
        $post_all = Post::orderBy('id', 'desc')->limit(3)->get();
        $room_all = Room::get();

        return view('front.home', compact('slide_all', 'feature_all', 'testimonial_all', 'post_all', 'room_all'));
    }
}
