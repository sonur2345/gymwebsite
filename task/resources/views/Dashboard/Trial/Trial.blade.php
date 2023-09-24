@extends('layouts.app')
@section('TrialContent')

<div class="role_img">
  <div id="role_h2">
    <h2> TRIAL DETAILS</h2>
  </div>
  <div id="role_btn">
  <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticEnquiryform" style="width: 142px;border-radius:19px;">ENQUIRY FORM</button>
            @include('Dashboard/DashForm/Enquiryform')
  </div>
</div>

<div class="container">
  <table class="table text-center mt-4" id="trial_table">
    <thead>
      <tr>
        <th>id</th>
        <th> Name</th>
        <th>Advisor Name</th>
        <th> Mobile Number </th>
        <th> Gender </th>
        <th> Description </th>
        <th> Strat Date </th>
        <th> End Date </th>
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
    @foreach($trial as $Trial)
      <tr>
        <td>{{ $Trial->id }}</td>
        <td>{{ $Trial->name }}</td>
        <td>{{ $Trial->adv_name }}</td>
        <td>{{ $Trial->mobile_num }}</td>
        <td>{{ $Trial->gender }}</td>
        <td>{{ $Trial->Description }}</td>
        <td>{{ $Trial->start_date }}</td>
        <td>{{ $Trial->end_date }}</td>
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