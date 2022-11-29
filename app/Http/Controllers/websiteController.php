<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    //
    public function index()
    {

        $homeSlider = HomeSlider::orderByDesc('id')->first();
        $about = AboutMe::orderByDesc('id')->first();
        $portfolio = Portfolio::where('category_id' ,'<' , '5')->limit(8)->orderByDesc('id')->get() ;
        $portfolio_cats = Category::where('id' , '<' , '5')->limit(4)->get();
        return view('frontend.index' , compact('homeSlider' , 'about' , 'portfolio', 'portfolio_cats'));
    }
}
