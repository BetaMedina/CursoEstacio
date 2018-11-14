<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.index',compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        Post::create(request([
         'title','body'
        ]));
        return redirect('/');

        // Post::create([
        //     'title'=> request('title'),
        //     'body' => request('body')
        //    ]);
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }

    public function edit($id)
    {
       $edit =  Post::find($id);
       return view('posts.edit',compact('edit'));
    }

    public function update(Request $request,$id)
    {
        Post::find($id)->update(['title' => request('title')],['body' =>request('body')]);
        return redirect('/');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('/');
    }
}
