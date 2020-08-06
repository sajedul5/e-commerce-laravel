<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['orders'] = Order::where('status','0')->count();
        $data['order'] = Order::where('status','1')->count();
        $data['coustomers'] = User::where('usertype','customer')->count();
        $data['total_amount'] = Order::where('status','1')->sum('order_total');
        return view('backend.layouts.home',$data);
    }
}
