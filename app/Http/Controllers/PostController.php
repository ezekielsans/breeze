<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    /**
     * Display
     * @return view
     * */

    public function create()
    {

//return
        return view('posts.create');
    }
    public function store()
    {

//return
        dd("hello");

    }
}
