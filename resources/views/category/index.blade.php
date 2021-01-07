@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>ANIMAL CATEGORY</h1>
            <ul class="list-unstyled">
               @include('inc.category')
            </ul>
        </div>
        <div class="col-8">
            <div class="d-flex justify-content-between">
                <h1>VET MANAGEMENT</h1>
                @if(!Auth::guest())
                    @if(auth()->user()->role == 'admin')
                    <p><a href="/category/create">add animal category</a></p>
                    @endif
                @endif
            </div>
            <div class="row py-2">
                 @foreach($categorys as $category)
                <div class="col-md-3 py-2">
                  <a href="/category/{{$category->id}}"> 
                    <img src="/storage/category/cover_images/{{$category->image}}" class="w-100"  height="150px;">
                  </a>
                
                </div>
                @endforeach

            </div>
        </div>



    </div>
</div>



@endsection