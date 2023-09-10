@extends('layouts.app')
@section('EmployeeContent')

<div class="role_img">
  <div id="role_h2">
    <h2> EMPLOYEE DETAILS</h2>
  </div>
  <div id="role_btn">
    <button type="button" class="btn btn-primary rounded-pill" id="Employee_manage_btn">ADD NEW EMPLOYEE</button>
    @include('\Dashboard\Employee\AddEmployeeForm')
  </div>
</div>

<div class="container">
  <table class="table table-bordered text-center mt-4" id="Emp_table">
    <thead>
      <tr class="table-primary">
        <th scope="col">id</th>
        <th scope="col"> Name</th>
        <th scope="col">DOB</th>
        <th scope="col">Email</th>
        <th scope="col"> Age </th>
        <th scope="col"> Employee Role </th>
        <th scope="col">Date of join</th>
        <th scope="col">Check In</th>
        <th scope="col">Check out</th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
    @foreach($employee as $Employee)
      <tr>
        <td>{{ $Employee->id }}</td>
        <td>{{ $Employee->Emp_Name }}</td>
        <td>{{ $Employee->Emp_dob }}</td>
        <td>{{ $Employee->Emp_email }}</td>
        <td>{{ $Employee->Emp_age }}</td>
        <td>{{ $Employee->Emp_role }}</td>
        <td>{{ $Employee->Emp_date_join }}</td>
        <td>{{ $Employee->st_check_in }}</td>
        <td>{{ $Employee->st_check_out }}</td>
        <td>
          <a href="#Employee{{$Employee->id}}" class="btn btn-dark" data-bs-toggle="modal"> EDIT </a>
          <a href="/Employee/{{$Employee->id}}/delete" class="btn btn-dark"> DELETE </a>
        </td>
        @include('\Dashboard\Employee\EditEmployeeForm')
      </tr>
      @endforeach
      
    </tbody>
  </table>
 
</div>
@endsection