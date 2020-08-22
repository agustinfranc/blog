<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Show all the users.
     *
     * @return json
     */
    public function index()
    {
        return response()->json(User::all());
    }

    public function store(Request $request)
    {
        // Validate the request...

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return response()->json($user);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return json
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['errorCode' => 500, 'errorMessage' => 'No se encontró el usuario']);

        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['errorCode' => 500, 'errorMessage' => 'No se encontró el usuario']);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return response()->json($user);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) return response()->json(['errorCode' => 500, 'errorMessage' => 'No se encontró el usuario']);

        $user->delete();

        return response()->json(true);
    }
}