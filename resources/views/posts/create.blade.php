 @extends('layouts.app')
 @section('content')

 <a style="margin-left:200px;margin-top:20px;" href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
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
          <label style="margin-top:30px;color:red;font-size: 25px;"> Add Post </label>
  <div class="form-group">
    <label  for="exampleInputEmail1" > Title </label>
    <input type="text" class="form-control"  name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Description </label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
           <label for="exampleInputPassword1"> Post Creator</label>
           <select class="form-control" name="user_id">
               @foreach($users as $user)
                   <option value= "{{$user->id}}"> {{$user->name}} </option>
               @endforeach
           </select>
       </div>

  <button style="margin-bottom:30px;font-size: 25px;" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


