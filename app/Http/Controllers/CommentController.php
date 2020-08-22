<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function index()
    {
        return response()->json(Comment::all());
    }

    public function show($id)
    {
        return response()->json(Comment::findOrFail($id));
    }
}