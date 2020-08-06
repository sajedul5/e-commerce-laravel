<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Slider;
class SliderController extends Controller
{
  public function view()
  {
    $data['allData'] = Slider::all();
    return view('backend.slider.view-slider', $data);
  }

  public function add()
  {
    return view('backend.slider.add-slider');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'short_title' => 'required',
      'long_title' => 'required',
      'image' => 'required',
    ]);

    $data = new Slider();
    $data->created_by = Auth::user()->id;
    if($request->file('image')){
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('sliders.view')->with('success','Slider added successfully!');
  }

  public function edit($id)
  {
    $editData = Slider::find($id);
    return view('backend.slider.edit-slider',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request,[
      'short_title' => 'required',
      'long_title' => 'required',
    ]);
    $data = Slider::find($id);
    $data->updated_by = Auth::user()->id;
    if($request->file('image')){
      @unlink(public_path('upload'.$data->image));
      $file = $request->file('image');
      $filename = date('YmdHi').$file->getClientOriginalName();
      $file->move(public_path('upload'), $filename);
      $data['image']=$filename;
    }
    $data->save();
    return redirect()->route('sliders.view')->with('success','Slider updated successfully!');
  }

  public function delete($id)
  {
    $data = Slider::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('sliders.view')->with('success','Slider deleted successfully!');
  }
}
