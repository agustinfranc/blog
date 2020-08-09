<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::all());
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return json
     */
    public function show($id)
    {
        return response()->json(User::findOrFail($id));
    }
}