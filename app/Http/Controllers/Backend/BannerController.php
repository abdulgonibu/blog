<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Banner;

class BannerController extends Controller
{
  public function view()
  {
    $data['alldata'] = Banner::all();
    return view('backend.slider.slider-view', $data);
  }

  public function add()
  {
    return view('backend.slider.add-slider');
  }

  public function store(Request $request)
  {
    $data = new Banner();
    $data->created_by = Auth::user()->id;
    $data->short_title = $request->short_title;
    $data->long_title = $request->long_title;
    if ($request->file('image')) {
      $file = $request->file('image');
      $filename = date('YmdHi') . $file->getClientORiginalName();
      $file->move(public_path('upload/slider_images'), $filename);
      $data['image'] = $filename;
      $data->save();
      return redirect()->route('sliders.view')->with('message', 'Slider add successfully');
    }
  }


  public function edit($id)
  {
    $editData = Banner::find($id);
    return view('backend.slider.edit-slider', compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $data = Banner::find($id);
    $data->updated_by = Auth::user()->id;
    $data->short_title = $request->short_title;
    $data->long_title = $request->long_title;
    if ($request->file('image')) {
      $file = $request->file('image');
      @unlink(public_path('upload/slider_images/' . $data->image));
      $filename = date('YmdHi') . $file->getClientORiginalName();
      $file->move(public_path('upload/slider_images'), $filename);
      $data['image'] = $filename;
      $data->save();
      return redirect()->route('sliders.view')->with('message', 'Slider update successfully');
    }
  }
  public function delete($id)
  {
    $slider = Banner::find($id);
    if (file_exists('public/upload/slider_images/' . $slider->image) and !empty($slider->image)) {
      unlink('public/upload/slider_images/' . $slider->image);
    }
    $slider->delete();
    return redirect()->route('sliders.view')->with('message', 'Slider deleted successfully');
  }
}
