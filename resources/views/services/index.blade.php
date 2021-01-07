@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>ANIMAL SERVICES</h1>
            <ul class="list-unstyled">
              @include('inc.service')
            </ul>
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between">
              <h1>VET SERVICES</h1>
           
              @if(auth()->user()->role == 'admin')
               <p><a href="/service/create">Create Service</a></p>
              @endif
            </div>
            <div class="row py-2">
                 @foreach($services as $service)
                  <div class="col-md-3 py-2">
                      <h1>{{$service->name}}</h1>
                         <p> <a href="/service/{{$service->id}}"> 
                            <img src="/storage/service/cover_images/{{$service->image}}" class="w-100"  height="150px;">
                          </a>
                      </p>
                  </div>
                 
                   

                    <!-- {{$service->description}} -->

                @endforeach

            </div>
        </div>




    </div>
</div>


@endsection