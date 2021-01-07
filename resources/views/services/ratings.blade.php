@extends('layouts.app')

@section('content')

<div class="container">
  <h1>view Ratings Per Service</h1>
  <div class="row">
    <div class="col-4">

      <ul class="list-unstyled">
        @include('inc.rating')
        <li><a href="/service">Go Back</a></li>
      </ul>
    </div>
    <div class="col-8">
      
      <div class="row py-2">

             @foreach($ratings as $rate)
             {{$rate->rate}}


             @endforeach
        
                   
      </div>
    </div>
  </div>
</div>



@endsection