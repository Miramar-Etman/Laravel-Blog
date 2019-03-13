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


}	