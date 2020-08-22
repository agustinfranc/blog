<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */

// ? php artisan route:list

/* Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index');        // http://127.0.0.1:8000/api/users/
    Route::get('/{id}', 'UserController@show');     // http://127.0.0.1:8000/api/users/1
}); */

//Route::apiResource('/users', 'UserController');

Route::apiResource('/users', 'UserController');

/* Route::prefix('posts')->group(function () {
    Route::prefix('/{post_id}/comments')->group(function () {
        Route::get('/', 'CommentController@index');        // http://127.0.0.1:8000/api/post/1/comments/
        Route::get('/{id}', 'CommentController@show');     // http://127.0.0.1:8000/api/post/1/comments/1
    });
    Route::get('/', 'PostController@index');        // http://127.0.0.1:8000/api/posts/
    Route::get('/{id}', 'PostController@show');     // http://127.0.0.1:8000/api/posts/1
}); */