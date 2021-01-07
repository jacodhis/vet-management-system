@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3>By Category</h3>

			<ul class="list-unstyled">
				@include('inc.category')
				<li><a href="/animal">Go Back</a></li>
			</ul>
		</div>
		<div class="col-md-8">
			
			<div class="row py-2">

				
				<div class="col-md-3">
					@if(auth()->user()->role == 'admin')
				     <p class="py-2"><a href="/animals/{{$animal->id}}">delete animal</a></p>
				     @endif
                  <p>
                  	  <a href="/animal/{{$animal->id}}"> 
                       <img src="/storage/animal/cover_images/{{$animal->image}}" class="w-100"  height="150px;" >
                    </a>
                  </p>
                  <p>{{$animal->name}}</p>
                  <!-- <p><a href="/addcart" class="btn btn-primary">Cart</a></p> -->
                  
							
				</div>

                   
			</div>

               
		</div>
	</div>
</div>



@endsection