@extends('layouts.app')
@section('RoleContent')

<div class="role_img">
  <div id="role_h2">
    <h2>ROLE DETAILS </h2>
  </div>
  <div id="role_btn">
    <button type="button" class="btn btn-primary rounded-pill" id="role_manage_btn">ADD NEW ROLE</button>
    @include('\Dashboard\Role\AddRoleForm')
  </div>
</div>

<div class="container">
  <table class="table table-bordered text-center mt-4">
    <thead>
      <tr class="table-active">
        <th scope="col">id</th>
        <th scope="col">Role Name</th>
        <th scope="col">Role Type</th>
        <th scope="col"> Sale Insentive </th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
      @foreach($role as $Role)
      <tr>
        <td>{{ $Role->id }}</td>
        <td>{{ $Role->Role_name }}</td>
        <td>{{ $Role->Role_type }}</td>
        <td>{{ $Role->Is_sale_incentive }}</td>
        <td >
          <a href="#edit{{$Role->id}}" data-bs-toggle="modal"  class="btn btn-dark"> EDIT </a>
          <a href="/Role/{{$Role->id}}/delete" class="btn btn-dark"> DELETE </a>
        </td>
        @include('Dashboard\Role\EditRole')
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
@endsection