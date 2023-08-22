
@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('Mechanic.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 <h3>Mechanic Name - {{ $data->name }} </h3>
 <h3>Phone Number - {{ $data->phone_number }}</h3>
 <h3>Email Address - {{ $data->email }} </h3>
 <h3>Speciality - {{ $data->speciality }}</h3>
 <h3>Location- {{ $data->location }} </h3>
</div>
@endsection