<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::get();
        return view('index', compact('categories'));
    }
}
