<?php

namespace App\Http\Controllers;

use DB;
use App\account;
use Illuminate\Http\Request;

class accountscontroller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user()->id;//users id;
        $myaccount = account::where('user_id',$user)->get();
    
       
        if($myaccount){
            return view('accounts.index',compact('myaccount','user'));
        }else{
              return redirect('/home')->with('error','unauthorized page');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // $user_id = auth()->user()->id ;
           return view('accounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $user_id = auth()->user()->id;
         // dd($user_id);

          $account = account::find($user_id);
          if($account){
            return back()->with('error','cannot create two accounts/Already have an account');

          }else{
             $account = new account;
                         $account->user_id = $user_id;
                         $account->amount = $request->input('amount');
                         $account->save();

                         return redirect('/home')->with('success','you can now book an appointment');
                    

          }
                  
                  

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
