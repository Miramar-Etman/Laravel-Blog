 @extends('layouts.app')

 @section('content')
 {{ csrf_field() }}
{{ method_field('PATCH') }}
 <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

    <form action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" value="{{$post->title}}" type="text" class="form-control" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control" > {{$post->description}}</textarea>
        </div>
          </div>
           <div class="form-group">
            <label for="exampleInputPassword1" >Post Creator</label>
            <select class="form-control" name="userName">
                    <option  name="userName" value="Miramar"> Miramar </option>
                    <option  name="userName" value= "Nada"> Nada </option>
            </select>

        </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection