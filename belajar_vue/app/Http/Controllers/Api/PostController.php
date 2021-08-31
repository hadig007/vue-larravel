<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\PostIndexResource;
use App\Http\Resources\PostShowResource;

class PostController extends Controller
{
    public function index(){
        return PostIndexResource::collection(
            Post::all()
        );
    }

    public function show(Request $request,$id){
        return new PostShowResource(
            Post::findOrFail($id)
        );
    }
}
