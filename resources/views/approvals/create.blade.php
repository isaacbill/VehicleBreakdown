@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('Approval.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('Approval.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Mechanic Name</label>
  <div class="col-md-8">
   <input type="text" name="mechanicname" class="form-control input-lg" />

  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Status</label>
  <!-- <div class="col-md-8">
   <input type="text" name="status" class="form-control input-lg" />
  </div> -->
  <select name="status" id="status">
	<option value="status">--status--</option>
  <option value="status">Approved</option>
  <option value="status">Not Approved</option>
	</select>
 </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Update" />
 </div>

</form>

@endsection

