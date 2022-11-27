<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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


        $path = 'upload/' . $id;
        if (File::exists($path)) {
            File::delete($path);
        }

        if ($request->has('profile_img')) {
            $file = $request->file('profile_img');
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move('upload/' . $id, $fileName);
            $data['profile_img'] = $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'user has been updated',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.profile.index')->with($notification);
    }

    //Change password form
    public function changePass()
    {
        $id = Auth::user()->id;
        $editPass = User::find($id);
        return view('backend.profile.profile_password_change', compact('editPass'));
    }

    //Save password
    public function savePass(AdminPasswordRequest $request)
    {

        $password = Auth::user()->password;
        $oldPass = $request->old_pass;
        if (Hash::check($oldPass, $password)) {
            $user = User::find(Auth::id());
            $user->password = bcrypt($request->new_pass);
            $user->save();
            return redirect()->route('dashboard')->with(['message' => 'password change successfully', 'alert-type' => 'success']);
        } else {

            return redirect()->back()->with(['message' => 'old password is not same', 'alert-type' => 'error']);
        }
    }

}
