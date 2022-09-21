<?php

namespace App\Http\Controllers\Front;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $video_all = Video::paginate(312);
        return view('front.video_galery', compact('video_all'));
    }
}
