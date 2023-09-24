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
    @foreach($Members as $members)
      <tr>
        <td>{{ $members->id }}</td>
        <td>{{ $members->mem_Name }}</td>
        <td>{{$members->pakage_name}}</td>
        <td>{{ $members->mem_number }}</td>
        <td>{{ $members->mem_email }}</td>
        <td>{{ $members->mem_date_join }}</td>
        <td>{{ $members->st_check_in }}</td>
        <td>{{ $members->st_check_out }}</td>
        <td>
          <a href="#medit{{$members->id}}" class="btn btn-dark" data-bs-toggle="modal"> EDIT </a>
          <a href="/Members/{{$members->id}}/delete" class="btn btn-dark"> DELETE </a>
        </td>
        @include('Dashboard.Members.EditMemberForm')
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection