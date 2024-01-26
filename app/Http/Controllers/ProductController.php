<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index() {
        $brands = Brand::all();
        $categorias = Category::all();
        return view('admin.create', ['brands' => $brands, 'categorias' => $categorias]);
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:your_table_name|max:255',
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'SKU' => 'required|max:255',
            'stock_status' => 'required|in:instock,outofstock',
            'featured' => 'sometimes|boolean',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'required|exists:brands,id',
        ]);

        Product::create($validatedData);
        return redirect()->route('admin.store')->with('success', 'Product created successfully.');
    }
}
