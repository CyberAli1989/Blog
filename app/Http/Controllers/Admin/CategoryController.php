<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use function view;

class CategoryController extends Controller
{
    //
    public function create()
    {
        return view('backend.category.category_form');
    }

    public function store(Request $request){
        $data = new Category();
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with(['message' => $data->title.'As a new category created' , 'alert-type' => 'success']);
    }
}
