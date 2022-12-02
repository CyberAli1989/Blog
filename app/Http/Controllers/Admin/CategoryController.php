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

    public function catEdit(Category $category)
    {
        return view('backend.category.category_form', compact('category'));
    }

    public function store(Request $request)
    {
        $data = new Category();
        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with(['message' => $data->title . 'As a new category created', 'alert-type' => 'success']);
    }

    public function update(Request $request, Category $category)
    {
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->update();
        return redirect()->route('admin.category.index')->with(['message' => $category->title . __("has changed")]);
    }

    public function index()
    {
        $category = Category::orderByDesc('id')->get();
        return view('backend.category.category_all', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with(['message' => 'Category Has been deleted successfully', 'alert-type' => 'success']);
    }
}
