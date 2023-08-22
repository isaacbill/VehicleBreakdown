@extends('layouts.app')

@section('content')
<table class="table table-bordered table-striped">
 <tr>
  
  <th >Name</th>
  <th >Email</th>
  <th >Phone</th>
  <th >Pick Up Location</th>
  <th >Pick Up Date</th>
  <th >Pick Up Time</th>
  <th >Mechanic</th>
  <th > Take Action</th>
 </tr>
 @foreach($data as $row)
  
   <td>{{ $row->name }}</td>
   <td>{{ $row->email }}</td>
   <td>{{ $row->phone_number }}</td>
   <td>{{ $row->pickup_location }}</td>
   <td>{{ $row->pickup_date }}</td>
   <td>{{ $row->pickup_time }}</td>
   <td></td>
   <td>
    <a href="{{route('Approval.create', $row->id)}}" class="btn btn-primary">Assign Mechanic</a>
    <form action="{{route('SendRequest.destroy', $row->id)}}" method="post">
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

