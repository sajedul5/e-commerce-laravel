<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Message;
class ContactController extends Controller
{
  public function view()
  {
    $data['countContact'] = Contact::count();
    $data['allData'] = Contact::all();
    return view('backend.contact.view-contact', $data);
  }

  public function add()
  {
    return view('backend.contact.add-contact');
  }

  public function store(Request $request)
  {
    $this->validate($request,[
      'phone' => 'required',
      'email' => 'required',
      'address' => 'required',
      'facebook' => 'required',
      'twitter' => 'required',
      'instagram' => 'required',
      'youtube' => 'required',
      'linkedin' => 'required',
    ]);

    $data = new Contact();
    $data->phone = $request->phone;
    $data->email = $request->email;
    $data->address = $request->address;
    $data->facebook = $request->facebook;
    $data->twitter = $request->twitter;
    $data->instagram = $request->instagram;
    $data->youtube = $request->youtube;
    $data->linkedin = $request->linkedin;
    $data->created_by = Auth::user()->id;
    $data->save();
    return redirect()->route('contact.view')->with('success','Contact added successfully!');
  }

  public function edit($id)
  {
    $editData = Contact::find($id);
    return view('backend.contact.edit-contact',compact('editData'));
  }

  public function update(Request $request, $id)
  {
    //dd('okkk');
    $this->validate($request,[
      'phone' => 'required',
      'email' => 'required',
      'address' => 'required',
      'facebook' => 'required',
      'twitter' => 'required',
      'instagram' => 'required',
      'youtube' => 'required',
      'linkedin' => 'required',
    ]);
    $data = Contact::find($id);
    $data->phone = $request->phone;
    $data->email = $request->email;
    $data->address = $request->address;
    $data->facebook = $request->facebook;
    $data->twitter = $request->twitter;
    $data->instagram = $request->instagram;
    $data->youtube = $request->youtube;
    $data->linkedin = $request->linkedin;
    $data->created_by = Auth::user()->id;
    $data->save();
    return redirect()->route('contact.view')->with('success','Contact updated successfully!');
  }

  public function delete($id)
  {
    $data = Contact::find($id);
    if(file_exists('public/upload/' .$data->image) AND ! empty($data->image)){
      unlink('public/upload/' .$data->image);
    }
    $data->delete();
    return redirect()->route('contact.view')->with('success','Contact deleted successfully!');
  }


  public function message()
  {
    $data ['allData'] = Message::orderBy('id','desc')->get();
    return view('backend.contact.view-message',$data);
  }
}
