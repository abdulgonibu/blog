<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function view()
    {
        $data['alldata'] = About::all();
        return view('backend.about.about-view', $data);
    }

    public function add()
    {
        return view('backend.about.add-about');
    }

    public function store(Request $request)
    {
        $data = new About();
        $data->about_text = $request->about_text;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $data['image'] = $filename;
            $data->save();
            return redirect()->route('abouts.view')->with('message', 'About add successfully');
        }
    }


    public function edit($id)
    {
        $editData = About::find($id);
        return view('backend.about.edit-about', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data = About::find($id);
        $data->about_text = $request->about_text;
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/about_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientORiginalName();
            $file->move(public_path('upload/about_images'), $filename);
            $data['image'] = $filename;
            $data->save();
            return redirect()->route('abouts.view')->with('message', 'About update successfully');
        }
    }
    public function delete($id)
    {
        $about = About::find($id);
        if (file_exists('upload/about_images/' . $about->image) and !empty($about->image)) {
            unlink('upload/about_images/' . $about->image);
        }
        $about->delete();
        return redirect()->route('abouts.view')->with('message', 'About deleted successfully');
    }
}
