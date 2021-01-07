<?php

namespace App\Http\Controllers;

use App\account;
use App\service;
use App\appointment;
use DB;
use Illuminate\Http\Request;

class appointmentscontroller extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
   

    public function index(){
        //
        if(auth()->user()->role == 'admin'){

        $appointments = appointment::all();
        return view('appointment.index',compact('appointments'));
        }else{
            return back()->with('error','UnAuthorized Page');
        }

        // dd($appointments);

        
    }


    public function service($id){
        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $service = service::find($id);
        // dd($service);
        return view('appointment.createservice',compact('service','name','email'));
    }

    public function store(request $request){
      // dd('ok');
         $app_fee = $request->input('app_fee');
         // dd($app_fee);
         $service_id= $request->input('service_id');
         // dd($service_id);
       
         $service = service::find($service_id);
         $service_pay = $service->pay;
         // dd($service_pay);
          $total_fee = $app_fee + $service_pay;
          // dd($total_fee);
         $appointment = new appointment;
         $appointment->user_id = auth()->user()->id;
         $appointment->phone = $request->input('phone');
         $appointment->date =  $request->input('date');
         $appointment->email = $request->input('email');
         $appointment->location = $request->input('location');
         $appointment->message = $request->input('message');
         $appointment->service_id = $request->input('service_id');

         $appointment->app_fee = $app_fee;
         

          $user_id = auth()->user()->id;//users id;  
          
          $user_account = account::find($user_id);
          if($user_account){
            $num = $user_account->amount; 
            $int = (int)$num;
               if($int >= $total_fee){
                      $rem = $int - $total_fee;
                       DB::table('accounts') ->where('user_id', $user_id)
                                          ->update(['amount' => $rem]);
                       
                       $appointment->save();
                       return redirect('/accounts')->with('success','appointment fee paid sucessfully,Appointment booked');
               }else{
                 return redirect('/home')->with('error','no enough money in your account');
               }


          }else{
             return redirect('/home')->with('error','create an account first');
          }
           
      

// 
         

         // return redirect('/appointment')->with('success','appointment booked ');

    }
}
