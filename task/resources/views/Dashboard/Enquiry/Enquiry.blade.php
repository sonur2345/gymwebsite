@extends('layouts.app')
@section('EnquiryContent')

<div class="role_img">
  <div id="role_h2">
    <h2> ENQUIRY DETAILS</h2>
  </div>
  <div id="role_btn">
  <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticEnquiryform" style="width: 142px;border-radius:19px;">ENQUIRY FORM</button>
            @include('Dashboard/DashForm/Enquiryform')
    
  </div>
</div>

<div class="container">
  
<table class="table table-bordered text-center mt-4">
    <thead>
      <tr>
        <th>id</th>
        <th> Name</th>
        <th>Advisor Name</th>
        <th> Mobile Number </th>
        <th> Gender </th>
        <th> Description </th>
        <th> Next Follow Up(In Days) </th>
        <th> Follow Up Date </th>
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
    @foreach($enquiry as $Enquiry)
      <tr>
        <td>{{ $Enquiry->id }}</td>
        <td>{{ $Enquiry->name }}</td>
        <td>{{ $Enquiry->adv_name }}</td>
        <td>{{ $Enquiry->mobile_num }}</td>
        <td>{{ $Enquiry->gender }}</td>
        <td>{{ $Enquiry->Description }}</td>
        <td>{{ $Enquiry->N_follow_days }}</td>
        <td>{{ $Enquiry->follow_days }}</td>
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