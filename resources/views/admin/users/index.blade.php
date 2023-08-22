@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="w3-light-grey">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:2;width:300px; margin-left:-120px" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
      <!--<span>Welcome <strong></strong></span><br>-->
      
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    @can('manage-users')
    <a href="{{route('adminusers.index')}}"class="w3-bar-item w3-button"><i class="fa fa-user-circle"></i>Users Management</a>
    @endcan
    @can('manage-users')
    <a href="{{ route('Mechanic.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>Mechanics</a>
    @endcan
    @can('manage-users')
    <a href="{{ route('SendRequest.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>Requests</a>
    @endcan
    @can('manage-users')
    <a href="{{ route('Approval.index')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Assign Request</a>
    @endcan
    <!--<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>-->
   <!--  <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Report</a>
    --> <!--<a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>--> 
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->


  <!-- Footer 
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">Mainwing</a></p>
  </footer>
-->
  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                   <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                            <td>
                          @can('edit-users')
                                <a href="{{route('adminusers.edit', $user->id)}}"><button type="button" class="btn btn-primary float-left">Edit</button>
                            @endcan
                            @can('delete-users')
                                <form action="{{route('adminusers.destroy', $user)}}" method="POST" class="float-left">
                         @csrf
                         {{method_field('DELETE')}}
                         <button type="submit" class="btn btn-warning">Delete</button>
                          </form>
                          @endcan
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
