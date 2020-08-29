<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::all());
    }

    public function show($id)
    {
        return response()->json(Post::findOrFail($id));
    }

    public function getByUser($id)
    {
        $post = User::find($id)->posts()->get();

        return response()->json($post);
    }
}