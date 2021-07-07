<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $categories = Category::get();
        return view('home')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function adminDashboard()
    {
        $order = Order::latest()->paginate(5);
        $t_order = Order::get();;
        $totalSales = Order::where('is_delivered', true)->sum('total_amount');
        $products = Product::all();

        return view('admin.dashboard')->with([
            'orders' => $order,
            'total_sales' => $totalSales,
            'products' => $products,
            't_order' => $t_order
        ]);
    }

    public function view($slug)
    {
        $product = Product::where('slug', $slug)->get()->first();
        $categories = Category::get();
        $products = Product::inRandomOrder()->paginate(8);
        return view('view')->with([
            'products' => $products,
            'product' => $product,
            'categories' => $categories
        ]);
    }
}
