@extends('layouts.app')

@section('content')
<body >
<h1 style="margin-left:570px;padding-top:10px;"> Post Information </h1>

     <a style="margin-left: 1000px;width:150px;" href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>

      <div class="bg-light text-dark" style="margin-left:500px;width: 500px;height:350px;opacity: 0.9;text-align:center;border-radius: 15px;font-family: Nunito;">
        <label style="margin-top: 20px;color:red;">Post Title: </label>
        <label  > {{$post->title}} </label>
        <br>
        <label style="color: red;">Post Creator: </label>
        <label> {{$post->user->name}} </label>
        <br>
        <label style="margin-top: 20px;color: red;">Post Description: </label>
        <br>
       <textarea disabled style="width:400px;"> {{$post->description}} </textarea>
       <br>
        <label style="color:red;margin-top: 20px;">Post Created At: </label>
        <br>
        <label > {{$post->created_at -> format('l js \of F Y h:i:s A')}} </label>
      </div>
</body>