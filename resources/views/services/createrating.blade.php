@extends('layouts.app')

@section('content')
<div class="container">
  <h1 style="text-align: center;">{{$service->name}}</h1>
<h2>Kindly give us your view/rate about this service</h2>
<form method="POST" action="/serviceratings/{{$service->id}}">
  @csrf
  <div class="form-group">
    <textarea cols="4" rows="4" class="form-control"  name="rate" required></textarea>
  </div>

  <div class="form-group">
    <input type="submit" name="" class="btn btn-primary form-control" value="rate">
  </div>
</form>
</div>

@endsection
