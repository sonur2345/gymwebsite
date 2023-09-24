<div class="modal modal-warning fade" id="staticMembersForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: #6f6b6b;">
                <h5 class="modal-title" id="staticAddRoleLabel" style="color: #fff;"> Add New Members </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <form method="post" class="form-gruop" action="/Members/save" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-b-8">
                            <div class="col-xs-12 col-xs-12">
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="member_name" name="member_name" placeholder="Name">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                       <label>Pakage Name</label>
                                       <select name="mem_pakage_id" id="select_mem_pakage" class="form-control">
                                            @foreach ($pakage as $Pakage)
                                            <option value="{{ $Pakage->id }}">{{ $Pakage->pakage_name }} + {{$Pakage->comp_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                   
                                </div>
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-3">
                                        <label>Contact</label>
                                        <input type="number" class="form-control" id="employee_number" name="member_number" placeholder="Mobile Number">
                                    </div>
                                
                                    <div class="col-xs-12 col-xl-3">
                                        <label>Gender </label> <br>
                                        <label class="radio-inline radio-warning"> Male
                                            <input type="radio" id="employee_gender" name="member_gender" value="Male" checked="">
                                            <span class="bmd-radio-outer-circle"> </span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b;"></span>
                                        </label>
                                        <label class="radio-inline radio-warning"> FeMale
                                            <input type="radio" id="employee_gender1" name="member_gender" value="FeMale">
                                            <span class="bmd-radio-outer-circle"> </span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b;"></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-3" style="padding-top:2px">
                                        <label>Marid Status </label> <br>
                                        <label class="radio-inline radio-warning">Single
                                            <input type="radio" id="status" name="marid_status" value="single" checked=""><span class="bmd-radio-outer-circle">
                                            </span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b"></span></label>
                                        <label class="radio-inline radio-warning">Married
                                            <input type="radio" id="status1" name="marid_status" value="married"><span class="bmd-radio-outer-circle"></span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="member_email" name="member_email" placeholder="Email">
                                    </div>
                                   
                                    <div class="col-xs-12 col-md-3">
                                    <label>DOB</label>
                                        <input type="date" id="employee_dob" class="form-control" name="member_dob" placeholder="DOB">
                                    </div>
                                </div>
                                <div class="col-xs-15 col-md-3 p-2">
                                <label>Date o Joining </label>
                                        <input type="date" class="form-control" placeholder="Date of joining" id="date_of_join_emp" name="date_of_join_mem">
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>PAN Number</label>
                                        <input type="text" class="form-control" id="mem_pan_number" name="mem_pan_number" placeholder="PAN Number">
                                    </div>
                                    
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Aadhar Number</label>
                                        <input type="number" class="form-control" id="employee_aadhar_number" name="mem_aadhar_number" placeholder="Aadhar Number">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label>Address</label>
                                        <input type="text" id="employee_address" class="form-control" name="mem_address" placeholder="Address">
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-7">
                                        <label style="color: #f00;">Employee Shift</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Straight Shift
                                                    <input class="shifts1" type="radio" name="shifts1" value="fullshifts1" checked>
                                                </label>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Split shifts
                                                    <input class="shifts1" type="radio" name="shifts1" value="splitsshifts1">
                                                </label>
                                            </div>
                                            <input type="hidden" name="shifts_type" class="form-control shifts_type" value="2">
                                        </div>
                                        <div class="row fullshifts1 mt-3">
                                            <div class="col-md-6">
                                                <label style="font-size: 14px;">Check-in</label>
                                                <input type="time" id="entrytime2" class="form-control" name="entrytime2" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime2" class="form-control" name="exittime2" value="">
                                            </div>

                                        </div>

                                        <div class="row splitshifts1 mt-3" style="display: none;">
                                            <div class="col-md-6">
                                                <label style="font-size: 14px;">Morning Check-in</label>
                                                <input type="time" id="entrytime" class="form-control" name="entrytime" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime" class="form-control" name="exittime" value="">
                                            </div>
                                        </div>

                                        <div class="row splitshifts1" style="display: none;">
                                            <div class="col-md-6">
                                                <label style="font-size: 14px;">Evening Check-in</label>
                                                <input type="time" id="entrytime1" class="form-control" name="entrytime1" value="">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime1" class="form-control" name="exittime1" value="">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <label>Member Status </label>
                                        <div class="row">
                                            <select name="mem_status" id="employee_status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-12 text-center mt-4">
                                        <button type="submit" onclick="emp_submit_save" class="btn btn-primary btn-lg" id="emp_btn_save">
                                            <i class="fa fa-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
</div>