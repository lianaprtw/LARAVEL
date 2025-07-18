<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('category')) {
            $category = Category::where('slug', $request->category)->first();
            if ($category) {
                $query->where('category_id', $category->id);
            }
        }

        if ($request->has('sub')) {
            $subcategory = Subcategory::where('slug', $request->sub)->first();
            if ($subcategory) {
                $query->where('subcategory_id', $subcategory->id);
            }
        }

        $products = $query->latest()->get();
        $categories = Category::with('subcategories')->get();

        return view('pages.catalogue', compact('products', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product-detail', compact('product'));
    }
}