@extends('layouts.app')

@section('content')
<div class="bg-img">
    <div class="d-flex justify-content-between">
        <div class="p-2">
            <h2 class=" card-text text-white p-2">
                Welcome
            </h2>
            <h5 class="text-white"> <i class="bi bi-house-door-fill p-2"></i>Dashboards</h5>
        </div>
        <div class="p-2">
            <button type="button" class="btn btn-primary rounded-pill mt-2">GROWTH</button>
            <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticAddPlan" style="width: 142px; border-radius:19px;right:0px;">ADD PLANS</button>
            @include('Dashboard/DashForm/AddPlan')
            <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticEnquiryform" style="width: 142px;border-radius:19px;">ENQUIRY FORM</button>
            @include('Dashboard/DashForm/Enquiryform')
            <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticAddExpenses">ADD EXPENSES</button>
            @include('Dashboard/DashForm/AddExpenses')
            <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticAddCash">ADD CASH</button>
            @include('Dashboard/DashForm/AddCash')
            <button type="button" class="btn btn-primary rounded-pill mt-2" data-bs-toggle="modal" data-bs-target="#staticBankDeposite">BANK DEPOSIT</button>
            @include('Dashboard/DashForm/BankDeposite')
        </div>
    </div>
    <div class="mt-4">
        <h1 class="pt-5 text-center">
            <a href="" class="typewrite typewrite1" data-period="2000" data-type='[ "Fitness Zone..", "Fitness Zone...", "Fitness Zone..", "Fitness Zone.." ]'>
                <span class="wrap"></span>
            </a>
        </h1>
        <h4 class="pb-5 text-center">
            <a href="" class="typewrite typewrite2" data-period="2000" data-type='[ "Re-Discover YourSelf", "Re-Discover YourSelf", "Build your body, build your character", "Workout Hard to make body Hard…" ]'>
                <span class="wrap"></span>
            </a>
        </h4>
    </div>
  
        <input type="date" id="start_date" name="start_date" class="btn btn-primary  btn-raised btn-rounded btn-sm white-icon-date" placeholder="Start Date" value="2023-09-02">


        <input type="date" id="end_date" name="end_date" class="btn btn-primary  btn-raised btn-rounded btn-sm white-icon-date " placeholder="End Date" value="2023-09-02">


        <button id="calbtn" class="btn btn-primary  btn-raised btn-rounded btn-sm" onclick="getdatafromdate()" fdprocessedid="58oz49">Go</button>
    
</div>
@include('Dashboard/Analytics/DashAnalytics1')
@endsection