 @extends('layouts.app')
 @section('content')
 <a href="{{route('posts.index')}}" class="btn btn-secondary">Back</a>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" > Title </label>
    <input type="text" class="form-control"  name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"> Description </label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
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


