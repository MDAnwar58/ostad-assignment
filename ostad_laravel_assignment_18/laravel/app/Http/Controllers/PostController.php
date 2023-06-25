<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function countPostByCategory($categoryId)
    {
        $categoryPostsCount = Post::countPostsByCategory($categoryId);
        return $categoryPostsCount;
    }
    function delete(Request $request)
    {
        $post = Post::findOrFail($request->id);
        $post->delete();

        return true;
    }
    function postsDelete()
    {
        Post::getSoftDeletedPosts();
        return true;
    }
}
