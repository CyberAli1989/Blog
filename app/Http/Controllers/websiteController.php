<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\HomeSlider;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    //
    public function index()
    {

        $homeSlider = HomeSlider::orderByDesc('id')->first();
        $about = AboutMe::orderByDesc('id')->first();
        return view('frontend.index' , compact('homeSlider' , 'about'));
    }
}
