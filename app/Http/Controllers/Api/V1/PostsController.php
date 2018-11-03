<?php

namespace App\Http\Controllers\Api\V1;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $Post = Post::findOrFail($id);
        $Post->update($request->all());

        return $Post;
    }

    public function store(Request $request)
    {
        $Post = Post::create($request->all());
        return $Post;
    }

    public function destroy($id)
    {
        $Post = Post::findOrFail($id);
        $Post->delete();
        return '';
    }
}
