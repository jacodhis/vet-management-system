@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h3>Animal Category</h3>
            <ul class="list-unstyled">
                @include('inc.category')
            </ul>
        </div>
        <div class="col-8">
           <div class="d-flex justify-content-between">
              <p>Animals Available</p>
              @if(!Auth::guest())
                  @if(auth()->user()->role == 'admin')
                   <p><a href="animal/create">create animal</a></p>
                  @endif
              @endif
            </div>
            <div class="row py-2">
                 @foreach($animals as $animal)
                <div class="col-md-3 py-2">
                  <p>
                      <a href="/animal/{{$animal->id}}"> 
                    <img src="/storage/animal/cover_images/{{$animal->image}}" class="w-100"  height="150px;">
                  </a>
                  </p>
                  <p>{{$animal->name}}</p>
                
                </div>
                @endforeach

            </div>
        </div>




    </div>
</div>



@endsection