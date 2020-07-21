@extends('layouts.app')

@section('content')



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

				<center><h3>Create Ticket</h3></center><hr/>

				<div class="jumbotron">
				  
					<form method="post" action="/user/store">

						{{ csrf_field() }}
				    	
				    	<div class="form-group">
						<label class="col-form-label" for="inputDefault">Ticket Name</label>
						<input type="text" class="form-control" name="tname" placeholder="Enter Ticket Name" id="inputDefault">
						</div>

					    <div class="form-group">
					    <label class="col-form-label" for="inputDefault">Email</label><br/>
					    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">	
					    </div>

					   	<div class="form-group">
					    <label class="col-form-label" for="inputDefault">Select Date</label>
					    <input type="date" class="form-control" name="date" placeholder="Pick Date" id="inputDefault">
					    <script>
					    	$('.datepicker').datepicker()
						</script>
					    	
					    </div>

					   	<br/>
					    
					    <button type="reset" class="btn btn-secondary">Reset</button>
					    <button type="submit" class="btn btn-primary">Submit</button>

					</form>		   
			 		
				</div>

			</div>



		</div>

	</div>

@endsection