<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('index')->with(['posts' => $posts]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with(['post' => $post]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $posts = Post::where('title', 'LIKE', "%{$keyword}%")
                     ->orWhere('detail', 'LIKE', "%{$keyword}%")
                     ->get();

        return view('search')->with(['posts' => $posts, 'keyword' => $keyword]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ], [
            'title.required' => 'タイトルは必須です',
            'detail.required' => '詳細は必須です',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->save();

        return redirect()->route('index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ], [
            'title.required' => 'タイトルは必須です',
            'detail.required' => '詳細は必須です',
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->save();

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('index');
    }
}

