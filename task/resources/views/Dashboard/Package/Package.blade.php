@extends('layouts.app')
@section('PakageContent')

<div class="role_img">
  <div id="role_h2">
    <h2>PACKAGE DETAILS</h2>
  </div>
  <div id="role_btn">
  <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticAddPlan" style="width: 142px; border-radius:19px;right:0px;">ADD PLANS</button>
            @include('Dashboard/DashForm/AddPlan')
 
  </div>
</div>

<div class="container">
  <table class="table table-bordered text-center mt-4">
    <thead>
      <tr class="table-primary">
        <th scope="col">id</th>
        <th scope="col">Pakage Name</th>
        <th scope="col">Services</th>
        <th scope="col"> Plan tenure </th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
    @foreach($pakage as $Pakage)
      <tr>
        <td>{{ $Pakage->id }}</td>
        <td>{{ $Pakage->pakage_name }}</td>
        <td>{{ $Pakage->services }}</td>
        <td>{{ $Pakage->comp_name }}</td>
        <td >
          <a href="#edit" data-bs-toggle="modal"  class="btn btn-dark"> EDIT </a>
          <a href="/Role/delete" class="btn btn-dark"> DELETE </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection