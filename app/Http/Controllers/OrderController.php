<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {

        return Order::all();

    }
    public function create(Request $request, Order $order)
    {
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'user' => 'required',
            'image' => 'required',
            'text' => 'required',

        ]);

        $order = new Order;
        $order->name = $request->name;
        $order->price =  $request->price;
        $order->text =  $request->text;
        $order->users_id =  $request->user;
        $order->image =  $request->image;
        $order ->save();

    }
}
