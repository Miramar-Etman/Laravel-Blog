@extends('layouts.app')

@section('content')
<br>
  <a href="{{route('posts.create')}}" class="btn btn-success"> Add Posts </a>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->userName}}</td>
      <td>{{$post->created_at}}</td>
      <td>
      <a href="{{route('posts.show',$post->id)}}" class="btn btn-info">View </a>
      <a href="" class="btn btn-warning">Edit </a>
      <a href="" class="btn btn-danger">Delete </a> </td>

    </tr>
    @endforeach

  </tbody>
</table>
@endsection