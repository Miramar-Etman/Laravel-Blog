<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Redirect;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Post;
use App\User;

class PostsController extends Controller
{
    public function index()
    {
    // {   $posts = DB::table('posts')->simplePaginate(5);
        return view('posts.index', [
            'posts' => Post::simplePaginate(5),
           
        ]);
    }



    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
    }
    public function store(StorePostRequest $request){
        Post::create(request()->all());
       // dd($request);
        return redirect()->route('posts.index');
    }

        public function show(Post $post)
    {        $users = User::all();
             return view('posts.show', [
            'post' => $post,
             'users' => $users,
        ]);
    }

        public function edit(Post $post)
    {
         $users = User::all();
         return view('posts.edit', [
            'post' => $post,
             'users' => $users,
        ]);
    }

    public function update (UpdatePostRequest $request,$post){
    		$data= request()->all();
           //dd($post);
            //$slug = Post::find($post);
            //$slug->slug= NULL;
        //   dd($slug->slug);
           	Post::where('id',$post)->update([
           		'title'=> $data['title'],
           		'description'=> $data['description'],
           		'user_id'=> $data['user_id'],
           	]);

           	return redirect()->route('posts.index');
    }

        public function destroy($id)
    {
        // delete
        $post = Post::find($id);
        $post->delete();
		  return redirect()->route('posts.index');
        
    }


}	
