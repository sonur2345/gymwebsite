<div role="dialog" class="modal modal-warning fade" id="Employee{{$Employee->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: #6f6b6b;">
                <h5 class="modal-title" id="staticAddRoleLabel" style="color: #fff;"> Add New Emolyee </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <form method="post" class="form-gruop" action="/Employee/{{$Employee->id}}/edit" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-b-8">
                            <div class="col-xs-12 col-xs-12">
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="employee_name" name="emplouee_name" value="{{$Employee->Emp_Name}}" placeholder="Name">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label>DOB</label>
                                        <input type="date" id="employee_dob" class="form-control" name="employee_dob" placeholder="DOB" value="{{$Employee->Emp_dob}}">
                                    </div>
                                    <div class="col-xs-12 col-md-2">
                                        <label>Age</label>
                                        <input type="number" class="form-control" id="employee_age" name="emplyee_age" placeholder="Age" value="{{$Employee->Emp_age}}">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-3">
                                        <label>Contact</label>
                                        <input type="number" class="form-control" id="employee_number" name="emplouee_number" placeholder="Mobile Number" value="{{$Employee->Emp_number}}">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label>Alt Cantact</label>
                                        <input type="number" id="employee_alt" class="form-control" name="employee_altnumber" placeholder="Alt Number" value="{{$Employee->Emp_alt_number}}">
                                    </div>
                                    <div class="col-xs-12 col-xl-3">
                                        <label>Gender </label> <br>
                                        <label class="radio-inline radio-warning"> Male
                                            <input type="radio" id="employee_gender" name="emplyee_gender" value="Male" checked="{{$Employee->Emp_gender}}">
                                            <span class="bmd-radio-outer-circle"> </span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b;"></span>
                                        </label>
                                        <label class="radio-inline radio-warning"> FeMale
                                            <input type="radio" id="employee_gender1" name="emplyee_gender" value="FeMale">
                                            <span class="bmd-radio-outer-circle"> </span>
                                            <span class="bmd-radio-inner-circle" style="background: #6f6b6b;"></span>
                                        </label>
                                    </div>
                                    <div class="col-xs-12 col-xl-3">
                                        <label>Marid Status </label> <br>
                                        <label class="radio-inline radio-warning">Single
                                            <input type="radio" id="status" name="marid_status" value="single" checked="">
                                        </label>
                                        <label class="radio-inline radio-warning">Married
                                            <input type="radio" id="status1" name="marid_status" value="married">
                                        </label>
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="Email" value="{{$Employee->Emp_email}}">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label>Select Role <span style="color: red;">*</span> </label>
                                        <select name="add_emp_role" id="select_emp_role" class="form-control">
                                        @foreach ($role as $Role)
                                            <option value="{{ $Role->Role_name }}">{{ $Role->Role_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label>Date o Joining </label>
                                        <input type="date" class="form-control" placeholder="Date of joining" id="date_of_join_emp" name="date_of_join_emp" value="{{$Employee->Emp_date_join}}">
                                    </div>
                                </div>
                                <div class="col-xs-15 col-md-3 p-2">
                                    <label>Designation</label>
                                    <input type="text" class="form-control" placeholder="designation" id="designation" name="designation" readonly>
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>PAN Number</label>
                                        <input type="text" class="form-control" id="employee_pan_number" name="emplouee_pan_number" placeholder="PAN Number" value="{{$Employee->Emp_pan_num}}">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label>Salary</label>
                                        <input type="number" id="employee_salary" class="form-control" name="employee_salary" placeholder="salary" value="{{$Employee->Emp_salary}}">
                                    </div>
                                    <div class="col-xs-12 col-md-3">
                                        <label>No. Of Leave</label>
                                        <input type="text" class="form-control" id="employee_leave" name="emplyee_leave" placeholder="Number of Leave" value="{{$Employee->Emp_no_leave}}">
                                    </div>
                                </div>

                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-6">
                                        <label>Aadhar Number</label>
                                        <input type="number" class="form-control" id="employee_aadhar_number" name="emplouee_aadhar_number" placeholder="Aadhar Number" value="{{$Employee->Emp_aadhar}}">
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label>Address</label>
                                        <input type="text" id="employee_address" class="form-control" name="employee_address" placeholder="Address" value="{{$Employee->Emp_address}}">
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
                                                <input type="time" id="entrytime2" class="form-control" name="entrytime2" value="{{$Employee->st_check_in}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime2" class="form-control" name="exittime2" value="{{$Employee->st_check_out}}">
                                            </div>

                                        </div>

                                        <div class="row splitshifts1 mt-3" style="display: none;">
                                            <div class="col-md-6">
                                                <label style="font-size: 14px;">Morning Check-in</label>
                                                <input type="time" id="entrytime" class="form-control" name="entrytime" value="{{$Employee->sp_m_check_in}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime" class="form-control" name="exittime" value="{{$Employee->sp_m_check_out}}">
                                            </div>
                                        </div>

                                        <div class="row splitshifts1" style="display: none;">
                                            <div class="col-md-6">
                                                <label style="font-size: 14px;">Evening Check-in</label>
                                                <input type="time" id="entrytime1" class="form-control" name="entrytime1" value="{{$Employee->sp_e_check_in}}">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Check-out</label>
                                                <input type="time" id="exittime1" class="form-control" name="exittime1" value="{{$Employee->sp_e_check_out}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12 p-2 mt-3">
                                            <label style="color: #f00;">Check (in -out) Late Minutes</label>
                                            <input type="text" id="lateminutes" class="form=control" name="lateminutes" value="{{$Employee->la_m_check_in_out}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-5">
                                        <label>Employee Status </label>
                                        <div class="row">
                                            <select name="employee_status" id="employee_status" class="form-control">
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
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