<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(10);
        return view('admin.category')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,name'
        ]);

        $category = new Category;
        $category->name = $request->get('category');
        $category->slug = Str::slug($request->get('category'));
        $category->save();

        return response()->json([
            'success' => 'Category was added successfully!',
        ]);
    }

    public function destroy($id)
    {
        $cat = Category::find($id);
        $cat->delete();

        return redirect()->back()->with('success', $cat->name.' category has been deleted successfully!');
    }
}
