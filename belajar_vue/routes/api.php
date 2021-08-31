<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\Api\PostController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('posts', function (Request $request) {
//     return Post::all();
// });
// Route::get('posts/{id}', function (Request $request, $abc) {
//     return Post::findOrFail($abc);
// });

// Route::get('posts',[PostController::class,'index']);
// Route::get('posts/{id}',[PostController::class,'show']);

Route::apiResource('posts', PostController::class )->only(['index','show']);