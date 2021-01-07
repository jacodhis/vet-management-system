@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-4">
			<h3>By Category</h3>
			
			<ul class="list-unstyled">
				@include('inc.category')
				<li><a href="/animal">Go Back</a></li>
			</ul>
		</div>
		<div class="col-8">
			
			<div class="row py-2">

				@foreach($animals as $animal)
				<div class="col-md-3 py-2">
                    <a href="/animal/{{$animal->id}}"> 
                       <img src="/storage/animal/cover_images/{{$animal->image}}" class="w-100"  height="150px;" >
                    </a>
							
				</div>
				@endforeach
                   
			</div>
			
			<div class="row">
				
				@foreach($category->services as $service)
					<div class="col-md-3">					 
						    <p><a href="/service/{{$service->id}}">{{$service->name}}</a></p>
					</div>
					@endforeach
				
			</div>

               
		</div>
	</div>
</div>



@endsection