@foreach($categorys as $category)
  <li>
      <a href="/category/{{$category->id}}">{{$category->name}}</a>
    </li>
@endforeach