<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;

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
    public function store(StoreRequest $request)
    {

//return

    }
}
