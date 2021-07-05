<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Sopamo\LaravelFilepond\Filepond;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        return view('admin.products.product')->with('products', $products);
    }

    public function create()
    {
        $category = Category::get();
        return view('admin.products.add_product')->with('categories', $category);
    }

    public function storeMedia(Request $request)
    {
        if ($request->hasFile('productImage')) {
            $file = $request->file('productImage');
            $filename = trim($file->getClientOriginalName());
            $folder = uniqid() . '_' . now()->timestamp;

            $file->storeAs('uploads/'.$folder, $filename, ['disk' => 'public']);

            TemporaryFile::create([
                'folder' => $folder,
                'filename' => $filename,
            ]);

            return $folder;
        }

    }

    public function store(Request $request)
    {
        if ($request->hasFile('productImage')) {
            $file = $request->file('productImage');
            $filename = trim($file->getClientOriginalName());
            $file->storeAs('uploads/', $filename, ['disk' => 'public']);
        }

        $request->validate([
            "p_name" => "required",
            "p_price" => "required|numeric",
            "discounted_price" => "required|numeric",
            "sold" => "required|numeric",
            "stock" => "required|numeric",
            "p_description" => "required|string",
        ]);

        $product = Product::create([
            'product_image' => $filename,
            'product_name' => $request->p_name,
            'product_description' => $request->p_description,
            'product_price' => $request->p_price,
            'discounted_price' => $request->discounted_price,
            'product_sold' => $request->sold,
            'category_id' => json_encode($request->categoryid),
            'product_stock_conut' => $request->stock
        ]);

        $product->categories()->attach($request->categoryid);
        return redirect(route('product'))->with('success', 'Product has been added successfully!');
    }

    public function view($id)
    {
        $product = Product::find($id);
        return view('admin.products.view')->with('product', $product);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        return view('admin.products.add_product')->with([
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('productImage')) {
            $file = $request->file('productImage');
            $filename = trim($file->getClientOriginalName());
            $file->storeAs('uploads/', $filename, ['disk' => 'public']);
        }

        $request->validate([
            "p_name" => "required",
            "p_price" => "required|numeric",
            "discounted_price" => "required|numeric",
            "sold" => "required|numeric",
            "stock" => "required|numeric",
            "p_description" => "required|string",
        ]);

        $product = Product::find($id);
        $product->update([
            'product_image' => $filename ?? $product->product_image,
            'product_name' => $request->p_name,
            'product_description' => $request->p_description,
            'product_price' => $request->p_price,
            'discounted_price' => $request->discounted_price,
            'product_sold' => $request->sold,
            'category_id' => json_encode($request->categoryid),
            'product_stock_conut' => $request->stock
        ]);

        $product->categories()->sync($request->categoryid);
        return redirect(route('product.view', $product->id))->with('success', 'Product has been updated successfully!');
    }

    public function destroy($id)
    {
        $cat = Product::find($id);
        $cat->delete();

        return redirect()->back()->with('success', $cat->name.' product has been deleted successfully!');
    }
}
