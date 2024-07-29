<?php
namespace App\Http\Requests\Post;

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;

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

    public function show(Post $post)
    {

//return

    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);

    }
    public function update(UpdateRequest $request, Post $post)
    {
        $formData = $request->validated();
        return redirect()->route('posts.show', ['post' => $post->id]);

    }

    public function destroy()
    {

        $post->delete();
        return redirect()->route('dashboard');
    }

}
