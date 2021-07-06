<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Order;
use App\Mail\NewOrder;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.order.order')->with([
            'orders' => $orders,
        ]);
    }


    public function view($id)
    {
        $order = Order::find($id);
        $categories = Category::get();
        return view('admin.order.view')->with([
            'order' => $order,
            'categories' => $categories
        ]);
    }

    public function delivered($id)
    {
        $order = Order::where('id', $id)->first();
        $order->is_delivered = 1;
        $order->save();

        return redirect()->back()->with('success', 'Item has been delivered!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'tel_no' => 'required|digits:10',
            'city' => 'required|string',
            'addr' => 'required',
            'qty' => 'required|integer',
        ]);

        $product_id = intval($request->input('product_id'));
        $product = Product::find($product_id);
        $product_price = preg_replace('/[^0-9.]/', '', $product->product_price);
        $product_price = floatval($product_price);

//        dd($request->all());

        $order = new Order;
        $order->product_id = $request->input('product_id');
        $order->customer_name = $request->input('name');
        $order->customer_tel_no = $request->input('tel_no');
        $order->customer_city = $request->input('addr');
        $order->customer_address = $request->input('addr');
        $order->order_quantity = $request->input('qty');
        $order->total_amount = $product_price * intval($request->input('qty'));
        $order->save();

        //  Send mail notification
//        $adminMail = User::get()->first();

        Mail::to('test@mail.com')->send(new NewOrder($order));

        return redirect()->back()->with('success', 'Your order has been placed successfully.
         You will recieve a call from our agent to confrim your order.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
