<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Requests\Post\StorePostRequest;
use App\Post;

class PostsController extends Controller
{ 
   public function index(){
   	$post = Post::paginate(2);
   	return PostResource::collection($post);
   	// dd($post);
   }

     public function show($post){
     	$post = Post::findOrFail($post);
   		return new PostResource($post);

   }
      public function store(StorePostRequest $request)
    {
        Post::create($request->all());
        return response()->json([
            'message' => 'Post Created Successfully'
        ],201);
    }

}
