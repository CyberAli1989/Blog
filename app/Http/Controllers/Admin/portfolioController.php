<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    //
    public function index()
    {
        $portfolio = Portfolio::orderByDesc('id')->get();
        return view('backend.portfolio.portfolio_all', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        $category = Category::all();
        return view('backend.portfolio.portfolio_form', compact('portfolio', 'category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('backend.portfolio.portfolio_form', compact('category'));
    }

    public function store(Request $request)
    {

        $data = new Portfolio();
        $data->name = $request->name;
        $data->slug = $request->slug;
        $data->category_id = $request->category_id;

        if ($request->has('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($image)->resize(null, '280')->save('upload/home_slider/' . $image_name);
            $image_url = 'upload/home_slider/' . $image_name;
            $data['image'] = $image_url;
        }

        $data->save();
        return redirect()->back()->with(['message' => $data->slug . ' has created successfully', 'alert-type' => 'success']);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $portfolio->name = $request->name;
        $portfolio->slug = $request->slug;
        $portfolio->category_id = $request->category_id;

        if ($request->has('image')) {
            $image = $request->file('image');
            $image_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            Image::make($image)->resize(null, '280')->save('upload/home_slider/' . $image_name);
            $image_url = 'upload/home_slider/' . $image_name;
            $data['image'] = $image_url;
        }

        $portfolio->update();
        return redirect()->route('admin.portfolio.index')->with(['message' => __("Portfolio updated successfully"), 'alert-type' => 'success']);
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with(['message' => 'portfolio has been deleted', 'alert-type' => 'success']);
    }
}
