@extends('layouts.app')
@section('content')

 <div class="content">
   <div class="row">
     <div class="col-md-12">
       <div class="card card-user">
         <div class="card-header">
           <h5 class="card-title">Booking Form for Breakdown Assistance</h5>
         </div>
        
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif

<form method="post" action="{{ route('SendRequest.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-Left">Name</label>
  <div class="col-md-8">
   <input type="text" name="name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 
 <div class="form-group">
  <label class="col-md-4 text-Left">Email</label>
  <div class="col-md-8">
   <input type="email" name="email" class="form-control input-lg" />
  </div>
 </div>
 <br />

 <div class="form-group">
  <label class="col-md-4 text-Left">Phone Number</label>
  <div class="col-md-8">
   <input type="text" name="phone_number" class="form-control input-lg" />
  </div>
 </div>
 <br />
 
 <div class="form-group">
  <label class="col-md-4 text-Left">Pickup Location</label>
  <div class="col-md-8">
   <input type="text" name="pickup_location" class="form-control input-lg" />
  </div>
 </div>
 <br />

 <div class="form-group">
  <label class="col-md-4 text-Left">Pick Up Date</label>
  <div class="col-md-8">
   <input type="date" name="pickup_date" class="form-control input-lg" />
  </div>
 </div>
 <br />
 
 <div class="form-group">
  <label class="col-md-4 text-Left">Pick Up Time</label>
  <div class="col-md-8">
   <input type="time" name="pickup_time" class="form-control input-lg" />
  </div>
 </div>
 <br />

 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Book Now" />
 </div>

</form>

@endsection