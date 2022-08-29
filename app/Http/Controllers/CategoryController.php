<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $posts = $category->getByCategory();
        dd($posts);
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}
