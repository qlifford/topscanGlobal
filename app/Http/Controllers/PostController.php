<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function post()
    {
        $post = Post::orderBy('id', 'desc')->paginate(20);
        return view('posts.index', [
            'post' => $post
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'post' => 'required',
        ]);
        $request->user()->post()->create([
            'post' => $request->post,
        ]);
        return back();
        // auth()->user()->post()->create();

        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'post' => $request->post,
        // ]);
        // dd('ok');
    }
}
