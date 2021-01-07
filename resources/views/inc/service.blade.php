@foreach($services as $service)
  <li>
      <a href="/service/{{$service->id}}">{{$service->name}}</a>
    </li>
@endforeach