<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = \App\order::all();
        return view('orders/index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders/create');
    }

    public function set_status($id)
    {
        $order = \App\order::find($id);
        $order->status = 1;
        $order->save();
        return redirect('orders');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $item)
        {
            $total += $item['price'] * $item['quantity'];
        }

        $grandTotal = $total + ($total * 0.15);
        $order = new \App\order([
            'first_name' => $request->get('FirstName'),
            'last_name' => $request->get('LastName'),
            'city' => $request->get('City'),
            'postal_code' => $request->get('PostalCode'),
            'country' => $request->get('Country'),
            'phone' => $request->get('Phone'),
            'total' => $total,
            'gst' => $total * 0.15,
            'grand_total' => $grandTotal,
            'user_id' => auth()->user()->id
        ]);

        $order->save();

        foreach ($cart as $item)
        {
            $orderDetail = new \App\order_details([
                'order_id' => $order->id,
                'book_id' => $item['id'],
                'quantity' => $item['quantity'],
                'unit_price' => $item['price']
            ]);
            $orderDetail->save();
        }

        session()->remove('cart');
        session()->flash('success', 'Order placed successfully');
        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
