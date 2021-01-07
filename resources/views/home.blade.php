@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome {{auth()->user()->role}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       
                  @if(auth()->user()->role == 'admin')

                    <p><a href="/animal/create">create animal</a></p>
                  <p><a href="/category">Animal Categories</a></p>
                  <p><a href="/category/create">Create Category</a></p>
                  <p><a href="/animal">animal</a></p>
                  <p><a href="/service">Service</a></p>
                  <p><a href="/service/create">create a service</a></p>
                    <p><a href="/users">View Users</a></p>
                     <!-- <p><a href="/accounts/create">Create An Account</a></p> -->
                  

                  @else

                     <p><a href="/accounts/create">Create An Account</a></p>
                     <p><a href="/accounts">View Account</a></p>
                     <p><a href="/animal">View Animals</a></p>
                     <p><a href="/service">View Animal Services</a></p>


                  @endif
                  






                </div>
            </div>
        </div>
    </div>
</div>

@endsection
