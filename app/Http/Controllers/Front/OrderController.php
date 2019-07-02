<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
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
            'text' => 'required',

        ]);

        $order = new Order;
        $order->name = $request->name;
        $order->price =  $request->price;
        $order->text =  $request->text;
        $order->users_id =  Auth::user()->id;
        $order->image =  $request->image;
        $order->nombrephoto =  $request->nombrephoto;
        $order->save();

    }
    public function panieruser()
    {

        return  Order::all()->where('users_id', '==',  Auth::user()->id);


    }

   public function paniersomme(Request $request,Order $order)
    {

            return $order = Order::all()->where('users_id', '==',  Auth::user()->id)->sum('price');



    }

    public function destroy(Request $request, Order $order)
    {
        $order = Order::find($order->id = $request->id);
        $order->delete();
    }

}
