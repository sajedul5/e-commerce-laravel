<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Shipping;
use App\Model\Payment;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Logo;
use App\Model\Contact;
use Auth;
class OrderController extends Controller
{
    public function pendingList()
    {
        $data['orders']= Order::where('status','0')->orderBy('id','desc')->get();
        return view('backend.order.pending-list',$data);
    }

    public function approveList()
    {
        $data['total_amount'] = Order::where('status','1')->sum('order_total');
        $data['orders']= Order::where('status','1')->get();
        return view('backend.order.approve-list',$data);
    }

    public function details($id)
    {
        $data['order'] = Order::find($id);
        return view('backend.order.details',$data);
    }

    public function approve($id)
    {
      $order = Order::find($id);
      $order->status = '1';
      $order->save();
      return redirect()->route('order.pending.list')->with('success','Order approved successfully!');
    }

    public function orderPrint($id)
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      $data['order'] = Order::find($id);
      return view('backend.order.order-print',$data);

    }
}
