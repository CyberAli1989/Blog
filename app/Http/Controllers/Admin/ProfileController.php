<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    // Show Profile
    public function Index()
    {
        $id = Auth::user()->id;
        $showUser = User::find($id);
        return view('backend.profile.profile_index', compact('showUser'));
    }

    //Edit profile
    public function edit()
    {
        $id = Auth::user()->id;
        $editUser = User::find($id);
        return view('backend.profile.profile_edit', compact('editUser'));
    }

    //Update profile
    public function update(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;


        $path = 'upload/'.$id ;
        if (File::exists($path)){
            File::delete($path);
        }

        if ($request->has('profile_img')){
            $file = $request->file('profile_img');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move('upload/'.$id , $fileName);
            $data['profile_img'] = $fileName;
        }

        $data->save();

        return redirect()->route('admin.profile.index');
    }


}
