@extends('layouts.app')
@section('PakageContent')

<div class="role_img">
  <div id="role_h2">
    <h2>PACKAGE DETAILS</h2>
  </div>
  <div id="role_btn">
    <button type="button" class="btn btn-primary rounded-pill" id="Pakage_manage_btn">ADD NEW Pakage</button>
 
  </div>
</div>

<div class="container">
  <table class="table text-center mt-4" id="Role_table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Role Name</th>
        <th scope="col">Role Type</th>
        <th scope="col"> Sale Insentive </th>
        <th scope="col"> Action </th>
      </tr>
    </thead>
    <tbody>
    
    </tbody>
  </table>

</div>
@endsection