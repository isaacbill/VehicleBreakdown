@extends('layouts.app')

@section('content')

<a href="{{ route('Mechanic.create') }}" class="btn btn-default">add</a>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="35%">Mechanic Name</th>
  <th width="35%">Phone Number</th>
  <th width="35%">Email Address</th>
  <th width="35%">Speciality</th>
  <th width="35%">Location</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->name }}</td>
   <td>{{ $row->phone_number }}</td>
   <td>{{ $row->email }}</td>
   <td>{{ $row->speciality}}</td>
   <td>{{ $row->location }}</td>
   <td>
    <a href="{{route('Mechanic.edit', $row->id)}}" class="btn btn-warning">Edit</a>
    <form action="{{route('Mechanic.destroy', $row->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
   </td>
  </tr>
 @endforeach

</table>
{!! $data->links() !!}
@endsection