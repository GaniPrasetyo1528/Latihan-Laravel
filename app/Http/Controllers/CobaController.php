<?php

namespace App\Http\Controllers;

use App\Models\CobaModel;

class CobaController extends Controller
{
    public function index()
    {
        $title = 'Home';
        return view('pages.home', compact('title'));
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about', compact('title'));
    }
    
    public function blog()
    {
        $title = 'Posts';
        $Blog_Posts = CobaModel::all();
        return view('pages.posts', compact('title', 'Blog_Posts'));
    }

    public function show($slug)
    {
        $title = 'Post';
        $posts = CobaModel::find($slug);
        return view('pages.post', compact('title', 'posts'));
    }
}
