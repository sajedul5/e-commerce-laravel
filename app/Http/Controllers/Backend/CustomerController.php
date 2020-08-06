<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;
class CustomerController extends Controller
{
  public function view()
  {
    $allData = User::where('usertype','customer')->where('status','1')->get();
    return view('backend.customer.view-customer',compact('allData'));
  }

  public function draftView()
  {
    $allData = User::where('usertype','customer')->where('status','0')->get();
    return view('backend.customer.draft-customer',compact('allData'));
  }

  public function delete($id)
  {
    $customer = User::find($id);
    if(file_exists('public/upload/' .$customer->image) AND ! empty($customer->image)){
      unlink('public/upload/' .$customer->image);
    }
    $customer->delete();
    return redirect()->route('customer.view')->with('success','Data deleted successfully!');
  }
}
