<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PortfolioController extends Controller
{
    public function index()
    {
        $portfolies = Portfolio::get();
        $categories = Category::get();
        return view('backend.portfolio.index', compact('portfolies', 'categories'));
    }


    public function show()
    {
        $portfolies = Portfolio::get();
        $categories = Category::get();
        return view('backend.portfolio.show', compact('portfolies', 'categories'));
    }

    public function store(Request $request)
    {
        $portfolies = new Portfolio();
        $portfolies->category_id = $request->category_id;
        // Note image
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/logo_images'), $filename);
            $portfolies['image'] = $filename;
            $portfolies->save();
            session()->flash('success', 'Portfolio added successfully');
            return back();
        }
    }
}
