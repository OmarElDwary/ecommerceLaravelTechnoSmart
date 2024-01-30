<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public $name;
    public $slug;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            "name"=> "required",
            "slug"=> "required"
        ]);
    }
    public function store(Request $request)
    {
        $this->validate(request(), [
            "name"=> "required",
            "slug"=> "required"
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        session()->flash("message","Category Has been created");
    }
    public function index() {
        return view("admin.category");
    }
}
