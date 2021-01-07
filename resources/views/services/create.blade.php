@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adding Service
                <div class="card-body">
    <form method="post" action="{{url('/service')}}" enctype="multipart/form-data">
     {{ csrf_field() }}

            <div class="form-group">
              <label for="name">Service Name:</label>
              <input type="text" class="form-control" name="name" required="" placeholder="enter your name">
            </div>

             <div class="form-group">
              <label for="name">Service Description:</label>
              <textarea cols="4" rows="4" class="form-control" name="service_name"></textarea>
            </div>

             <div class="form-group">
              <label for="name">Service Pay:</label>
                <input type="number" class="form-control" name="pay" required=""/>
            </div>

             <div class="form-group">
              <label for="name">animal Category</label>
             <select class="form-control" name="category_id">
              @foreach($cats as $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
             </select>
            </div>
                  
             <div class="form-group">
              <label for="image">animal image:</label>
              <input type="file" class="form-control" name="cover_image" required=""/>
            </div>

    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>
 
</form>
    
</div>
</div>
</div>
</div>
</div>




@endsection