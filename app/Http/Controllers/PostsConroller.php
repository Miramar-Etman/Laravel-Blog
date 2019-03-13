<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsConroller extends Controller
{
    public function index(){
    	return views ('posts.posts');
    }
}
