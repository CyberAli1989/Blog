<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutMe;
use Illuminate\Http\Request;
use Image;

class AboutMeController extends Controller
{
    //index
    public function index()
    {
        $about = AboutMe::orderByDesc('id')->first();

        return view('backend.about.about', compact('about'));
    }

    public function CreateAboutMe(Request $request)
    {
        $about = new AboutMe();
        $about->name = $request->name;
        $about->job = $request->job;
        $about->description = json_encode($request->description);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(null, '600')->save('upload/about/' . $image_name);
            $image_url = 'upload/about/' . $image_name;
            $about->image = $image_url;
        }
        $about->save();
        return redirect()->back()->with(['message' => 'About me successfully created' , 'alert_type' => 'success']);
    }

    public function UpdateAboutMe(Request $request , AboutMe $about)
    {
        $about->name = $request->name;
        $about->job = $request->job;
        $about->description = json_encode($request->description);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(null, '600')->save('upload/about/' . $image_name);
            $image_url = 'upload/about/' . $image_name;
            $about->image = $image_url;
        }
        $about->update();
        return redirect()->back()->with(['message' => 'About me successfully updated' , 'alert_type' => 'success']);
    }

    public function uploadImage(Request $request) {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
