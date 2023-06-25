<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function getPostsWithCategory($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts;
        return view('category.posts', compact('posts'));
    }

    function getCategories($categoryId)
    {
        $category = Category::find($categoryId);
        $latest = $category->getLatestPost();

        return $latest;
    }

    function getPostWithCategories()
    {
        $categories = Category::with('posts')->get();
        return view('category.latest_posts', compact('categories'));
    }

}
