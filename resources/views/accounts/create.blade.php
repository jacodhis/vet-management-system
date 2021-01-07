@extends('layouts.app')
@section('content')
<div class="mr-3 ml-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Fund Account
                <div class="card-body">
                   <form method="POST" action="{{url('/accounts')}}">
                    {{ csrf_field() }}

                     <div class="form-group">
                        <label for="price">Amount</label>
                        <input type="text" class="form-control" name="amount" required="" />
                      </div>
                

                 <button type="submit" name="submit" class="btn btn-outline-success">submit</button>

                 
                </form>
    
</div>
</div>
</div>
</div>
</div>





@endsection