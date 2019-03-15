 @extends('layouts.app')

 @section('content')

 <a style="margin-left:300px;"href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

    <form  action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container" style="width:600px; background-color:white;opacity: 0.7;color:black;border-radius: 15px;">
        <div class="form-group">
            <label style="margin-top:30px;" for="exampleInputEmail1">Title</label>
            <input name="title" value="{{$post->title}}" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control" > {{$post->description}}</textarea>
        </div>
    <div class="form-group">
           <label for="exampleInputPassword1"> Post Creator</label>
           <select class="form-control" name="user_id">
               @foreach($users as $user)
                   <option name= "user_id"value= "{{$user->id}}"> {{$user->name}} </option>
               @endforeach
           </select>
       </div>
    <input style="margin-bottom: 30px;font-size: 25px;" name="submit" type="submit" value="submit" class="btn btn-primary">
  </div>
    </form>


@endsection