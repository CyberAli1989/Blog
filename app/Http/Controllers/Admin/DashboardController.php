<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // Show Index
    public function Index()
    {
        $id = Auth::user()->id;
        $showUser = User::find($id);
        return view('backend.dashboard' , compact('showUser'));
    }







//    Log Out Function
    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
