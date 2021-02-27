<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'publish')->with('author')->simplePaginate(5);
        return view('index', compact('posts'));
    }
    public function post($slug)
    {
        $post = Post::with('author')->whereSlug($slug)->first() ?? abort(404, "Wrong way dude...");
        return view('post', compact('post'));
    }
}
