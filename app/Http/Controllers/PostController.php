<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        // auth()->user()->posts()->create();

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);
    }
}
