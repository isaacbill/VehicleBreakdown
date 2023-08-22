@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
  <th width="35%">Mechanic Name</th>
  <th width="35%">Status</th>
  <th width="30%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->mechanicname }}</td>
   <td>{{ $row->status }}</td>
   <td>
    <a href="contact-us1" class="btn btn-primary">Confirm Approval</a>
    <form action="{{route('Approval.destroy', $row->id)}}" method="post">
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