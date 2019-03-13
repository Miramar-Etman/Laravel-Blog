<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }



    public function create()
    {
        // $users = User::all();
        return view('posts.create');
    }
    public function store()
    {
        Post::create(request()->all());
        return redirect()->route('posts.index');
    }

        public function show(Post $post)
    {
             return view('posts.show', [
            'post' => $post
        ]);
    }

}	