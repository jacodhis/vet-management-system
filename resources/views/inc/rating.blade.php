@foreach($services as $service)
  <li>
      <a href="/rating/{{$service->id}}">{{$service->name}}</a>
    </li>
@endforeach