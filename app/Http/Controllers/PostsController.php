<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function index()
    {
        return view('admin.posts.index');
    }

}
