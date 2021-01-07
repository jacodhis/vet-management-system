@extends('layouts.app')

@section('content')
<div class="outside-container" style="background-color: #">
<div class="mr-2 ml-2">
  <div class="row">
             <div class="col-md-12 col-sm-12 col-lg-12 ">
                 <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                            <!-- <li data-target="#carousel" data-slide-to="2"></li> -->
                           
                        </ol>
                        <div class="carousel-inner ">
                          

                            <div class="carousel-item active">
                                <img class="rounded d-block " src="images/1.jpeg" style="width:100%; height: 500px;" alt="First Image">
                                 <div class="carousel-caption">
                                   <h3>###</h3> 
                                 </div>
      
                            </div>

                            <div class="carousel-item">
                                <img class="rounded d-block " src="images/2.jpeg" style="width:100%; height: 500px;" alt="Second Image">
                                <div class="carousel-caption">
                                   <h3 style="color: blue;">#####</h3> 
                                 </div>
                            </div>
                                    
                        </div>

                    </div>
             </div>           
         </div>
     </div>
 </div>

       
</div>

@endsection
