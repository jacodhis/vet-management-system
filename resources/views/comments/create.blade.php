@extends('layouts.app')

@section('content')
@if(!Auth::guest())

<div class="container">
<div class="card ">

	<h1>{{$service->name}}</h1>


  <h4 style="color: blue">Chart Zone/Comments</h4>
            <div class="card" style="background-color: violet"> 
                 @foreach($service->comments as $comment) 
                   
                   <div class="d-flex">
                    @if(auth()->user()->id == $comment->user_id || auth()->user()->role == 'admin')
                     <p style="color: blue;">{{$comment->body}} by :: {{$comment->User->name}}-
                         written {{$comment->created_at->diffForHumans()}} 
                       </p>
                    @endif    
                   </div>
                   <div class="d-flex justify-content-between">
                    @if(auth()->user()->id == $comment->user_id)
                      <a href="/comments/delete/{{$comment->id}}" class="btn btn-danger btn-sm" style="color: ;" class=""> delete comment</a>
                     @else
                     <!-- not equal -->

                     @endif
                      <!-- <a href="/comments/{{$comment->id}}"> Edit comment</a> -->
                   </div>


                  @if(auth()->user()->id == $comment->user_id || auth()->user()->role == 'admin')
                     @foreach($comment->comments as $reply)
                     
                           <div class="">
                             <p style="color: white; ">{{$reply->body}}</p>
                              <p>replied by ::{{$reply->user->name}} <b>{{$reply->created_at->diffForHumans()}}</b></p>
                          
                           </div>
                           
                      @endforeach 
                      @endif

                       @if(auth()->user()->role == 'admin')
                        @include('inc.replycomment')
                                                
                       @endif 
                      @endforeach

               </div>

	@include('inc.addcomment')

</div>

</div>
@else
<a href="/login">Login First</a>
@endif
@endsection