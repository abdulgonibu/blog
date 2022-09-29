<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Logo;
use App\Models\Portfolio;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //home page menubar

    public function index()
    {
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        return view('welcome', $data);
    }

    public function category($id)
    {
        $data['portfolies'] = Portfolio::all();
        $data['logos'] = Logo::all();
        $data['categories'] = Category::all();
        $data['category'] = Category::find($id);
        return view('category', $data);
    }

    public function contact()
    {
        return view('fontend.pages.contact');
    }

    public function portfolio()
    {
        $data['portfolios'] = Portfolio::all();
        return view('portfolio', $data);
    }

    public function about()
    {
        $data['about'] = About::find();
        $data['portfolies'] = Portfolio::all();
        $data['categories'] = Category::all();
        $data['logos'] = Logo::all();
        return view('about', $data);
    }
}
