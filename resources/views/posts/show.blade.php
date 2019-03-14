@extends('layouts.app')
@section('content')
 <a href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>

    <form >
  <div class="form-group">
    <label> {{$post->user->name}} </label>
    <br>
    <label  > {{$post->title}} </label>
     <br>
    <label > {{$post->description}} </label>
    <br>
    <label > {{$post->created_at}} </label>
  </div>
</form>