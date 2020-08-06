<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Category;
use App\Http\Requests\CategoryRequest;
class CategoryController extends Controller
{
  public function view()
  {
    $data['allData'] = Category::all();
    return view('backend.category.view-category', $data);
  }

  public function add()
  {
    return view('backend.category.add-category');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'name' => 'required|unique:categories,name'
    ]);

    $data = new Category();
    $data->name = $request->name;
    $data->created_by = Auth::user()->id;
    $data->save();
    return redirect()->route('category.view')->with('success','Data added successfully!');
  }

  public function edit($id)
  {
    $editData = Category::find($id);
    return view('backend.category.add-category',compact('editData'));
  }

  public function update(CategoryRequest $request, $id)
  {

    $data = Category::find($id);
    $data->name = $request->name;
    $data->updated_by = Auth::user()->id;
    $data->save();
    return redirect()->route('category.view')->with('success','Data updated successfully!');
  }

  public function delete($id)
  {
    $data = Category::find($id);
    $data->delete();
    return redirect()->route('category.view')->with('success','Data deleted successfully!');
  }
}
