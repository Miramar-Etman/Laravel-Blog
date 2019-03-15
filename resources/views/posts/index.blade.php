@extends('layouts.app')

@section('content')
  <h1 style=" margin-left:600px;"> Blog Posts </h1>
<div style=" margin-left:80px; ">
  <a href="{{route('posts.create')}}" class="btn btn-success" style="font-size:20px;margin-bottom: 20px; "> Add Posts </a>

  <table class=" col-sm-11 row-sm-3 table table-bordered row- table-light text-dark" style="opacity: 0.9;border-color:black;">
  <thead class="bg-info">
    <tr style="text-align: center;">
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Title Slug</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr style="text-align: center;">
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{isset($post->user)?$post->user->name:'Not Found'}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->slug}}</td>
      <td>
      <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">View </a>
      <a href="{{route('posts.edit',$post->id)}}" class="btn btn-warning">Edit </a>
      <a href="{{route('posts.destroy',$post->id)}}" onclick="return delValidate();" class="btn btn-danger">Delete </a> </td>
      <script>
        function delValidate(){
          if (!confirm ('Do You Want to Delete this Post ?'))
            event.preventDefault();
        }
      </script>

    </tr>
    @endforeach

  </tbody>
</table>
</div>
@endsection