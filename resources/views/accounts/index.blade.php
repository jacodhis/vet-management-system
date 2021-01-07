@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: black;">
                <div class="card-header" style="color: yellow; background-color: blue">Dashboard</div>

                <div class="card-body">
                    <a href="/home">go back to dashboard</a><br>
                  
                    <a href="/accounts/create">create virtual account</a>

                    @foreach($myaccount as $myacount)
                     <p style="color: white;">Account Balance: Ksh {{$myacount['amount']}};</p>
                   

                    @endforeach

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
