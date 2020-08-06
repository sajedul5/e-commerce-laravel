<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\About;
use App\Model\Contact;
use App\Model\Message;
use App\Model\Product;
use App\Model\ProductSubImage;
use App\Model\ProductColor;
use App\Model\ProductSize;
use App\Model\Shipping;
use App\Model\Payment;
use App\Model\Order;
use App\Model\OrderDetail;
use App\User;
use Auth;
use Mail;
use DB;
use Session;
use Cart;
class DashbroadController extends Controller
{
    public function dashbroad()
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      $data['user'] =Auth::user();
      return view('frontend.single_pages.customer-dashboard',$data);
    }

    public function editProfile()
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      $data['editData'] = User::find(Auth::user()->id);
      return view('frontend.single_pages.customer-edit-profile',$data);
    }

    public function updateProfile( Request $request)
    {
      $user = User::find(Auth::user()->id);
      $this->validate($request,[
        'name' => 'required',
        'email' => 'required|unique:users,email,'.$user->id,
        'mobile' => ['required','unique:users,mobile,'.$user->id,'regex:/(^(\+8801|8801|01|008801))[1|5-9]{1}(\d){8}$/'],
        'address' => 'required',
        'gender' => 'required'
      ]);

      $user->name = $request->name;
      $user->email = $request->email;
      $user->mobile = $request->mobile;
      $user->address = $request->address;
      $user->gender = $request->gender;
      if($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('upload'.$user->image));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload'), $filename);
        $user['image']=$filename;
      }
      $user->save();
      return redirect()->route('dashbroad')->with('success','Profile update successfully');
    }

    public function passwordChange()
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      return view('frontend.single_pages.customer-password-change',$data);
    }

    public function updatePassword(Request $request)
    {
      $this->validate($request,[
        'current_password' => 'required',
        'password' => ['required', 'string', 'min:6', 'confirmed'],
      ]);
      if(Auth::attempt(['id'=>Auth::user()->id,'password'=>$request->current_password])){
        $user = User::find(Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('dashbroad')->with('success','Password changed successfully!');
      }
      else {
        return redirect()->back()->with('error','Sorry! your current password does not match');
      }
    }

    public function payment()
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      return view('frontend.single_pages.customer-payment', $data);
    }
    public function paymentStore(Request $request)
    {
      if($request->product_id==NULL){
        return redirect()->back()->with('error','Please add any product!');
      }
      else {
        $this->validate($request,[
          'payment_method' => 'required'
        ]);
        if($request->payment_method=="Bkash" && $request->transaction_no==NULL){
          return redirect()->back()->with('message','Please enter your transaction no');
        }
        DB::transaction(function()use($request){
          $payment = new Payment();
          $payment->payment_method = $request->payment_method;
          $payment->transaction_no = $request->transaction_no;
          $payment->save();
          $order = new Order();
          $order->user_id = Auth::user()->id;
          $order->shipping_id = Session::get('shipping_id');
          $order->payment_id = $payment->id;
          $order_data = Order::orderBy('id','desc')->first();
          if($order_data == null){
            $firstReg = '0';
            $order_no = $firstReg+1;
          }else{
            $order_data = Order::orderBy('id','desc')->first()->order_no;
            $order_no = $order_data+1;
          }
          $order->order_no = $order_no;
          $order->order_total = $request->order_total;
          $order->status = '0';
          $order->save();
          $contents = Cart::content();
          foreach($contents as $content){
            $order_details = New OrderDetail();
            $order_details->order_id = $order->id;
            $order_details->product_id = $content->id;
            $order_details->color_id = $content->options->color_id;
            $order_details->size_id = $content->options->size_id;
            $order_details->quantity = $content->qty;
            $order_details->save();
          }
        });
      }
      Cart::destroy();
      return redirect()->route('customer.order.list')->with('success','Your order successfully');
    }

    public function orderList()
    {
      $data['logo'] = Logo::first();
      $data['contact'] = Contact::first();
      $data['orders'] = Order::where('user_id',Auth::user()->id)->orderBy('id','desc')->get();
      return view('frontend.single_pages.customer-orders', $data);
    }

    public function orderDetails($id)
    {
      $orderData = Order::find($id);
      $data['order']= Order::where('id',$orderData->id)->where('user_id',Auth::user()->id)->first();
      if($data['order']==false){
        return redirect()->back()->with('error','Do not try to be over smart!!');
      }
      else {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['order']= Order::with(['order_details'])->where('id',$orderData->id)->where('user_id',Auth::user()->id)->first();
        return view('frontend.single_pages.customer-order-details', $data);
      }

    }


    public function orderPrint($id)
    {
      $orderData = Order::find($id);
      $data['order']= Order::where('id',$orderData->id)->where('user_id',Auth::user()->id)->first();
      if($data['order']==false){
        return redirect()->back()->with('error','Do not try to be over smart!!');
      }
      else {
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['order']= Order::with(['order_details'])->where('id',$orderData->id)->where('user_id',Auth::user()->id)->first();
        return view('frontend.single_pages.customer-order-print', $data);
      }

    }

}
