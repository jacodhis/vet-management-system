@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adding Category
                <div class="card-body">
    <form method="post" action="{{url('/category')}}" enctype="multipart/form-data">
     {{ csrf_field() }}

            <div class="form-group">
              <label for="name">category Name:</label>
              <input type="text" class="form-control" name="name" required="" placeholder="enter your name">
            </div>      

    <button type="submit" name="submit" class="btn btn-outline-success">submit</button>


 
</form>
    
</div>
</div>
</div>
</div>
</div>





@endsection