@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-4">
			<h3>Other Services</h3>
			<ul class="list-unstyled">
				@include('inc.service')
				<li><a href="/service">Go Back</a></li>
			</ul>
		</div>
		<div class="col-8">
			
			<div class="row py-2">
				<div>
					<div class="d-flex">
						<p>
							<a href="/service" class="mr-2">services Page</a>
						</p>
						    <strong>|</strong>
						  
							    <p class="ml-2 mr-2">
							    	<a href="/comments/create/{{$service->id}}"> chart </a>
							    </p>

					       <strong>|</strong>
					          @if(auth()->user()->role == 'admin')
							    <p class="ml-2 mr-2">
							    	<a href="/service/create">create service</a>
							    </p>
							    <strong>|</strong>
							   @endif
					    <p class="ml-2 mr-2">
					    	  @if(auth()->user()->role != 'admin')
					    	   <a href="/serviceratings/{{$service->id}}/create"> rate Service</a>
					    	   @endif
					    </p>
					    <strong>|</strong>
					    <p class="ml-2 mr-2">
					    	<a href="/serviceratings/{{$service->id}}"> view Ratings</a>
					    </p>
					</div>
				<div class="d-flex justify-content-between">
					<h1>{{$service->name}}</h1>
					@if(auth()->user()->role == 'admin')
				     <p class="py-2"><a href="/services/{{$service->id}}">delete service</a></p>
				     @endif
				</div>
			</div>

				<div class="py-2">
					 <p class="py-2"> <a href="/service/{{$service->id}}"> 
                        <img src="/storage/service/cover_images/{{$service->image}}" class="w-100"  height="300px;">
                      </a>
                  </p>
                  <p style="color: blue">category : {{$service->category->name}}</p>
                  <p>{{$service->description}}</p>  


				</div>
			</div>
			<p style="color: blue;">Service Fee: <strong style="color: green;">{{$service->pay}} Kshs</strong> </p>
			  @if(auth()->user()->role != 'admin')
				<div class="row">
					<form method="POST" action="/appointment/service/{{$service->id}}">
						@csrf
					  <button type="submit" name="" class="form-control btn btn-primary">book appointment</button>
					</form>
				</div>
			@else
			 <div class="py-2">
					 <p class="py-2"> <a href="/service/{{$service->id}}"> 
                        <a href="/appointment" class="btn btn-primary">view appointments</a>   
                     </p>


			@endif

               
		</div>
	</div>
</div>





@endsection