<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {

        return Order::all();

    }
    public function create(Order $order, Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'user' => 'required',
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
    public function destroy(Request $request, Order $order)
    {
        $order = Order::find($order->id = $request->id);
        $order->delete();
    }
    public function edit(Request $request,Order $order)
    {
        $order = Order::find($order->id = $request->id);
        return $order->where('id', $order->id)->first();
    }
}
