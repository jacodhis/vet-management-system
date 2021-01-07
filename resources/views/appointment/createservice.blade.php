@extends('layouts.app')

@section('content')
<section class="section-main bg padding-top-sm">
        <div class="container">
        	<h1>BOOK APPOINTMENT WITH VET</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="bg-green">
                        <div class="row">                        
                            <div style="width: 90%; margin-left: 5%; margin-right: 5%;">
                                
                            </div>
                        </div>      
                        <div class="ftco-cover-1 overlay" style="background-color: rgba(68, 114, 196, 0.8);">
                        
                        </div>
                    </div>

  
                    <div id="join" class="site-section" style="background-color: #fff; margin-bottom: 20px;">
                        <div class="container">
                            <div style="text-align: left; margin-bottom: 20px;">
                               

                        <form action="/appointment" method="post">
                          @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Name</label>
                                      <input type="text" name="name" class="form-control" placeholder="Name" value="{{$name}}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Email Address</label>
                                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$email}}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Phone Number</label>
                                      <input type="phone" class="form-control" name="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Location</label>
                                      <input type="text" name="location" class="form-control" placeholder="Location" required>
                                    </div>
                                </div>

                               

                                <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Date</label>
                                      <input type="date" name="date" class="form-control" placeholder="Job" required>
                                    </div>
                                </div>

                                  <div class="col-md-5">
                                    <div class="form-group">
                                      <label>{{$service->name}}</label>
                                      <input type="text" name="service_id" class="form-control" value="{{$service->id}}" readonly>
                                    </div>
                                </div>

                                 

                                
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>message</label>
                                      <textarea cols="4" rows="4" class="form-control" name="message" required></textarea> 
                                    </div>
                                </div>
                                
                                 <div class="col-md-5">
                                    <div class="form-group">
                                      <label>PAY : {{$service->name}}</label>
                                      <input type="text" class="form-control" name="pay" value="{{$service->pay}}" readonly>
                                    </div>
                                </div>

                                <?php
                                $fee = 1000;

                                ;?>

                                 <div class="col-md-5">
                                    <div class="form-group">
                                      <label>Appointment Fee : {{$fee}}</label>
                                      <input type="text" class="form-control" name="app_fee" value="{{$fee}}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input type="submit" name="" class="btn btn-primary" value="submit">
                                    </div>
                                </div>
                                  
                            </div>
                        </form>
                    </div>
                            

                </div>
            </div>

     
</div>


 </div></div></section>
 <div class="container">
     
 </div>

@endsection
