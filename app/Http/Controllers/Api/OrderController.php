<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Ramsey\Uuid\Uuid;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()
            ->paginate(10);
        
        return OrderResource::collection($orders);
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    public function store(Request $request)
    {
        $order = $this->validate($request, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required'  
        ]);
        
        $order = new Order;

        $order->id = Uuid::uuid4()->toString();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->status = $request->status;
            
        $order->save();

        return new OrderResource($order);
    }

    public function confirm(Order $order)
    {
        $order->changeStatus('Confirm');

        return $order;
    }

    public function keep(Order $order)
    {
        $order->changeStatus('Keep');

        return $order;
    }
}
