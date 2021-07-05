<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate();
        $categories = Category::get();
        return view('home')->with([
            'products' => $products,
            'categories' => $categories
        ]);
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
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
