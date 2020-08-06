<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Video;
class VideoController extends Controller
{
  public function view()
  {
    $data['countVideo'] = Video::count();
    $data['allData'] = Video::all();
    return view('backend.video.view-video', $data);
  }

  public function add()
  {
    return view('backend.video.add-video');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'video' => 'required',
    ]);

    $data = new Video();
    $data->video = $request->video;
    $data->save();
    return redirect()->route('video.view')->with('success','video added successfully!');
  }

  public function edit($id)
  {
    $editData = Video::find($id);
    return view('backend.video.add-video',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    $data = Video::find($id);
    $data->video = $request->video;
    $data->save();
    return redirect()->route('video.view')->with('success','video updated successfully!');
  }

  public function delete($id)
  {
    $data = Video::find($id);
    $data->delete();
    return redirect()->route('video.view')->with('success','video deleted successfully!');
  }
}
