<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        return view("admin.product", compact("categories","brands", "products"));
    }
    // create product
    public function create(Request $request)
    {
        $brands = Brand::all();
        $categories = Category::all();
        return view('admin.create', ['brands' => $brands, 'categories' => $categories]);
    }
    // store it to DB
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:products',
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'sku' => 'required',
            'stock_status' => 'required',
            'featured' => 'required',
            'quantity' => 'required|integer',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048|mimes:jpg,jpeg,png,webp',
        ]);
        $input = $request->all();
        if($image = $request->file('image')) {
            $destinantion = 'products/';
            $productImage = date('YmdHis').".".$image->getClientOriginalExtension();
            $image->move($destinantion, $productImage);
            $input['image'] = $productImage;
        }
        Product::create($input);

        return redirect(route('admin.product'))->with('Success', 'Product created succesfully');
    }
    // delete product
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('admin.product'))->with('success', 'Product deleted successfully');
    }
}
