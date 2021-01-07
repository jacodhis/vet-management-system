@extends('layouts.app')

@section('content')

<div class="container">
  <h1>view Ratings Per Service</h1>
  <div class="row">
    <div class="col-4">
      <h3>By service</h3>

      <ul class="list-unstyled">
        @include('inc.rating')
        <li><a href="/service">Go Back</a></li>
      </ul>
    </div>
    <div class="col-8">
      
      <div class="row py-2">

        
        <div class="">
                  @foreach($rates as $rate)
                   <p>{{$rate->rate}}</p>
                   <p>{{$rate->user->name}}</p>
                  @endforeach
              
        </div>

                   
      </div>

               
    </div>
  </div>
</div>



@endsection