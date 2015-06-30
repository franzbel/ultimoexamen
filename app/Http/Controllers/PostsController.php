<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;


class PostsController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post($request->all());

        $post->save();
        return (redirect()->back());
    }
}
