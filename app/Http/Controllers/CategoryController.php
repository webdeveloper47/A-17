<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;

        return view('category.posts', compact('category', 'posts'));
    }
}
