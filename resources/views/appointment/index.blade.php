@extends('layouts.app')

@section('content')
<div class="container">
	<table class="table table hover">
		<thead>
			<tr>
				<td>customer name</td>
				<td>customer Phone Number</td>
				<td>customer Location</td>
				<td>service Name</td>
				<td>Appointment Fee</td>
				<td>Service Fee</td>
				<td>Date </td>
			</tr>
		</thead>
		<tbody>
			@foreach($appointments as $appointment)
			<tr>
				<td>{{$appointment->user->name}}</td>
				<td>{{$appointment->phone}}</td>
				<td>{{$appointment->location}}</td>
				<td>{{$appointment->service->name}}</td>
				<td>{{$appointment->app_fee}}</td>
				<td>{{$appointment->service->pay}}</td>
				
				<td>{{$appointment->created_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
