@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table">
    <tr>
      <td>Name</td>
      <td>Email</td>
      <td>Role</td>
      <td>delete</td>
      <td>Edit User</td>
      <td></td>
    </tr>
    @foreach($users as $user)
      <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>
        <td>
          <form method="post" action="">
            @method('destroy')
            <input type="submit" name="" value="delete">
          </form>
        </td>

        <td>
          <a href="/users/{{$user->id}}/edit"> edit Information </a>
        </td>
      </tr>

    @endforeach
    
  </table>
</div>

@endsection
