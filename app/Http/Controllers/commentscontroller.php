<?php

namespace App\Http\Controllers;

use App\comment;
use App\service;
use Illuminate\Http\Request;

class commentscontroller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    //
     public function create($id)
    {
        //
        $service = service::find($id);
        return view('comments.create',compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addservicecomment(Request $request,service $service)
    {
         $this->validate($request,[
         'body'=> 'required'
        ]);
         // dd($service);
       
        $comment = new comment();
        $comment->body = $request->input('body');
        $comment->user_id = auth()->user()->id;      
        $service->comments()->save($comment);
       
        return back()->with('success','commented');


    }
     public function replycomment(Request $request,comment $comment)
    {
         $this->validate($request,[
         'body'=> 'required'
        ]);
         // dd($service);
       
        $reply = new comment();
        $reply->body = $request->input('body');
        $reply->user_id = auth()->user()->id;

        $comment->comments()->save($reply);
       
        return back()->with('success','reply created');


    }
    public function delete($id){
        $comment = comment::find($id);
        $comment->delete();
        return back()->with('success','commented deleted successfully');
    }

}
