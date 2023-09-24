@extends('layouts.app')
@section('MembersContent')

<div class="role_img">
  <div id="role_h2">
    <h2> Members DETAILS</h2>
  </div>
  <div id="role_btn">
  <button type="button" class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#staticMembersForm">ADD NEW MEMBER</button>
    @include('Dashboard.Members.AddMemberForm')
  </div>
</div>

<div class="container">
<table class="table table-bordered text-center mt-4">
    <thead>
      <tr class="table-primary">
        <th scope="col">id</th>
        <th scope="col">Member Name</th>
        <th scope="col">Pakage Name</th>
        <th scope="col">Mobile Number</th>
        <th scope="col">Email</th>
        <th scope="col">Date of join</th>
        <th scope="col">Check In</th>
        <th scope="col">Check out</th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
    @foreach($members as $Members)
      <tr>
        <td>{{ $Members->id }}</td>
        <td>{{ $Members->mem_Name }}</td>
        <td>{{$Members->pakage_name}}+{{ $Members->services}} + {{$Members->comp_name}}</td>
        <td>{{ $Members->mem_number }}</td>
        <td>{{ $Members->mem_email }}</td>
        <td>{{ $Members->mem_date_join }}</td>
        <td>{{ $Members->st_check_in }}</td>
        <td>{{ $Members->st_check_out }}</td>
        <td>
          <a href="#" class="btn btn-dark" data-bs-toggle="modal"> EDIT </a>
          <a href="" class="btn btn-dark"> DELETE </a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>

</div>
@endsection