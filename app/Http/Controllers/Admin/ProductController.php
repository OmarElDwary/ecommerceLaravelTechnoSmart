<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $data['getRecrd'] = Category::getRecord();
        return view('', $data);
    }
}