@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adding animal
                <div class="card-body">
    <form method="post" action="{{url('/animal')}}" enctype="multipart/form-data">
     {{ csrf_field() }}

            <div class="form-group">
              <label for="name">animal Name:</label>
              <input type="text" class="form-control" name="name" required="" placeholder="enter your name">
            </div>

             <div class="form-group">
              <label for="name">animal color:</label>
              <input type="color" class="form-control" name="color" required="" placeholder="enter your name">
            </div>
             <div class="form-group">
              <label for="name">animal weight:</label>
              <input type="text" class="form-control" name="weight" required="" placeholder="enter your name">
            </div>
             <div class="form-group">
              <label for="name">Date of Birth:</label>
              <input type="date" class="form-control" name="birth_date" required="" placeholder="enter your name">
            </div>

             <div class="form-group">
              <label for="name">Gender:</label>
              <select name="gender" class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>

            <div class="form-group">
              <label for="image">animal image:</label>
              <input type="file" class="form-control" name="cover_image" required=""/>
            </div>

               <div class="form-group">
                   
                  <label for="car"> animal category :</label>
                  
                    <select id="company" name="category" class="form-control">
                      @foreach($categorys as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>

      

    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form>
    
</div>
</div>
</div>
</div>
</div>





@endsection