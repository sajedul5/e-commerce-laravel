<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use Auth;
class LogoController extends Controller
{
  public function view()
  {
    $data['countLogo'] = Logo::count();
    $data['allData'] = Logo::all();
    return view('backend.logo.view-logo', $data);
  }

  public function add()
  {
    return view('backend.logo.add-logo');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'image' => 'required',
    ]);

    $data = new Logo();
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('logos.view')->with('success','Logo added successfully!');
  }

  public function edit($id)
  {
    $editData = Logo::find($id);
    return view('backend.logo.edit-logo',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $data = Logo::find($id);
    $data->updated_by = Auth::user()->id;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('logos.view')->with('success','Logo updated successfully!');
  }

  public function delete($id)
  {
    $data = Logo::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('logos.view')->with('success','Logo deleted successfully!');
  }
}
