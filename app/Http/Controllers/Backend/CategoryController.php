<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Auth;


class CategoryController extends Controller
{
    public function view()
    {
        $data['alldata'] = Category::all();
        return view('backend.category.category-view', $data);
    }

    public function add()
    {
        return view('backend.category.add-category');
    }

    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('categories.view')->with('message', 'Category add successfully');
    }

    public function edit($id)
    {
        $editData = Category::find($id);
        return view('backend.category.edit-category', compact('editData'));
    }

    public function update(Request $request, $id)
    {
        $data = Category::find($id);
        $data->name = $request->name;
        $data->save();
        return redirect()->route('categories.view')->with('message', 'Category update successfully');
    }

    public function delete($id)
    {
        $slider = Category::find($id);
        $slider->delete();
        return redirect()->route('categories.view')->with('message', 'Category deleted successfully');
    }
}
