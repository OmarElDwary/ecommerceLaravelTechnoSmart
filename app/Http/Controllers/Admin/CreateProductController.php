<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateProductController extends Controller
{

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $feautred = 0;
    public $quantity;
    public $image;
    public $category_id;
    public $brand_id;
    public function index()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('admin.create', ['brands' => $brands, 'categories' => $categories]);
    }


    private function validateProductData(Request $request)
    {
        return $request->validate([
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
    }
    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->category_id = $request->category_id;
        $product->brand_name = $request->brand_name;
        $product->short_description = $request->short_description;
        $product->brand_image = $request->brand_image;
        $product->category_id = $request->category_id;
        $product->category_name = $request->category_name;
        $product->brand_image = $request->brand_image;
        $product->sku = $request->sku;
        $product->quantity = $request->quantity;
        $product->regular_price = $request->regular_price;
        $product->sale_price = $request->sale_price;
    }
}
