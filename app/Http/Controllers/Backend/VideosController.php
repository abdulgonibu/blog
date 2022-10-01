<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    public function view()
    {
        $data['alldata'] = Video::all();
        return view('backend.videos.videos-view', $data);
    }

    public function add()
    {
        return view('backend.videos.add-videos');
    }

    public function store(Request $request)
    {
        $data = new Video();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('videos.view')->with('message', 'Videos add successfully');
    }

    public function edit($id)
    {
        $editData = Video::find($id);
        return view('backend.videos.edit-videos', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data = Video::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('videos.view')->with('message', 'Videos update successfully');
    }

    public function delete($id)
    {
        $data = Video::find($id);
        $data->delete();
        return redirect()->route('videos.view')->with('message', 'Videos deleted successfully');
    }
}
