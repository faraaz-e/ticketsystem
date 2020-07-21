@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body"> -->
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->



   


<div class="container">
    

        <div class="row">



            <div class="col-lg-6 mx-auto pt-4">

                <center><h3>Overview</h3></center><hr/>

                <div class="jumbotron">
                  
                    <ul class="list-group">

                        <li class="list-group-item d-flex justify-content-between align-items-center bg-warning">
                        Overall Total
                        <span class="badge badge-primary badge-pill"> {{$totalcount}} </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Tomorrow
                        <span class="badge badge-primary badge-pill"> {{$tomr_date}} </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Today
                        <span class="badge badge-primary badge-pill"> {{$today_date}} </span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        Yesterday
                        <span class="badge badge-primary badge-pill"> {{$yestr_date}} </span>
                        </li>

                    </ul>      
                    
                </div>

            </div>


            <div class="col-lg-6 mx-auto pt-4">

                <center><h3>Top Performance</h3></center><hr/>

                <div class="jumbotron">

                    <center>    

                            



                        <div class="row">

                            <div class="col-lg-4 mx-auto">
                                <div class="card text-white bg-success mb-5" style="max-width: 20rem;">
                                    <u>1st Place</u>  <br/>  
                                     <img src="img/profile.png" alt="User" height="50px" width="50px">
                                <div class="card-body">
                                    <h4 class="card-title"> {{ $final_user_name_1 }} </h4>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mx-auto">
                                <div class="card text-white bg-success mb-5" style="max-width: 20rem;">
                                    <u>2nd Place</u> <br/>
                                    <img src="img/profile.png" alt="User" height="50px" width="50px">
                                <div class="card-body">
                                    <h4 class="card-title"> {{ $final_user_name_2 }}  </h4>
                                </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mx-auto">
                                <div class="card text-white bg-success mb-5" style="max-width: 20rem;">
                                    <u>3rd Place</u> <br/>
                                    <img src="img/profile.png" alt="User" height="50px" width="50px">
                                <div class="card-body">
                                    <h4 class="card-title"> {{ $final_user_name_3 }} </h4>
                                </div>
                                </div>
                            </div>

                        </div>

                    </center>   
                    
                </div>

            </div>



        </div>

    </div>











                    
<!--                 </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
