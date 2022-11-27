<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Image;

class HomeSliderController extends Controller
{
    //return view page of home slider setup
    public function homeSlider()
    {
        $homeSlider = HomeSlider::orderByDesc('id')->first();
        return view('backend.slider.home_slider', compact('homeSlider'));
    }

    public function CreateHomeSlider(Request $request)
    {
        $slider = new HomeSlider();
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        if ($request->has('header_img')) {
            $header_img = $request->file('header_img');
            $header_img_name = hexdec(uniqid()) . '.' . $request->file('header_img')->getClientOriginalExtension();
            Image::make($header_img)->save('upload/home_slider/' . $header_img_name);
            $header_img_url = 'upload/home_slider/' . $header_img_name;
            $slider['header_img'] = $header_img_url;
        }
        if ($request->has('header_profile')) {
            $header_profile = $request->file('header_profile');
            $header_profile_name = hexdec(uniqid()) . '.' . $request->file('header_profile')->getClientOriginalExtension();
            Image::make($header_profile)->save('upload/home_slider/' . $header_profile_name);
            $header_profile_url = 'upload/home_slider/' . $header_profile_name;
            $slider['header_profile'] = $header_profile_url;
        }
        $slider->save();

        return redirect()->back()->with(['message' => 'Home Slider Updated Successfully', 'alert_type' => 'success']);

    }


    public function UpdateHomeSlider(Request $request, HomeSlider $slider)
    {
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        if ($request->has('header_img')) {
            $header_img = $request->file('header_img');
            $header_img_name = hexdec(uniqid()) . '.' . $request->file('header_img')->getClientOriginalExtension();
            Image::make($header_img)->save('upload/home_slider/' . $header_img_name);
            $header_img_url = 'upload/home_slider/' . $header_img_name;
            $slider->header_img = $header_img_url;
        }

        if ($request->has('header_profile')) {
            $header_profile = $request->file('header_profile');
            $header_profile_name = hexdec(uniqid()) . '.' . $request->file('header_profile')->getClientOriginalExtension();
            Image::make($header_profile)->resize(215,215)->save('upload/home_slider/' . $header_profile_name);
            $header_profile_url = 'upload/home_slider/' . $header_profile_name;
            $slider['header_profile'] = $header_profile_url;
        }
        $slider->update();

        return redirect()->back()->with(['message' => 'Home Slider Created Successfully', 'alert_type' => 'success']);

    }
}
