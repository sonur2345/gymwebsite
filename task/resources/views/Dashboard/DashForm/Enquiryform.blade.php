<div role="dialog" class="modal modal-warning fade scale in" id="staticEnquiryform" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 550px;">
        <form action="/Enquiry/save" method="post" id="saveform">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enquiry Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="add-modal">
                    <div class="pad" id="infopanel"></div>
                    <div class="form-horizontal">
                        <div class="row mt-2">
                            <div class="col-xs-12 col-xl-12">
                                <div class="row mt-3">
                                    <div class="col-xs-6 col-xl-6">
                                        <div class="form-group">
                                            <label class="control-lable">Name <span style="color: red;">*</span></label>
                                            <input type="text" class="form-control" id="text_Enquiryform" onkeydown="upperCaseF(this)" name="m_name" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-xl-6">
                                        <label>Advisor Name <span style="color: red;">*</span></label>
                                        <select name="add_emp_role" id="text_Eadvisorname" class="form-control" onkeydown="upperCaseF(this)">
                                            @foreach($employee as $Employee)
                                            <option value="{{ $Employee->Emp_Name }}">{{ $Employee->Emp_Name }}({{$Employee->Emp_role}})</option>
                                            @endforeach
                                        </select>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-4 col-xl-4">
                                        <label class="control-lable">Phone <span style="color: red;">*</span></label>
                                        <input type="number" name="number" class="form-control" id="number_Enquiryform" onkeypress="if(this.value.length==10) return false;" required>
                                    </div>
                                    <div class="col-xs-4 col-xl-4">
                                        <div class="form-group">
                                            <label class="control-lable">Date <span style="color: red;">*</span></label>
                                            <input type="date" name="date" class="form-control" id="date_Enquiryform" value="2023-09-04" required min="2023-09-04">
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-xl-4">
                                        <div class="form-group">
                                            <label class="control-lable">Gender <span style="color: red;">*</span></label>
                                            <select name="gender" class="form-control" id="gender_Enquiryform" onkeydown="upperCaseF(this)">
                                                <option value="">SELECT</option>
                                                <option value="Male">Male</option>
                                                <option value="Female"> Female </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-12 col-xl-12">
                                        <label class="control-label">Description <span style="color: red;"></span></label>
                                        <textarea name="description" class="form-control" id="description_enquriyform">
                                     </textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-xs-12 col-xl-12" id="enqyriyfollowup">
                                        <div class="row">
                                            <div class="col-xs-6 col-xl-6">
                                                <input type="hidden" id="enquiry_datetoday" value="2023-09-04">
                                                <label id="enquiry_lableNext">Next Follow Up(In Days)</label>
                                                <input type="number" name="enquiry_followdays" class="form-control" id="enquiry_followdays">
                                            </div>
                                            <div class="col-xs-6 col-xl-6">
                                                <label id="enquiry_lableNext">Follow Up Date</label>
                                                <input type="date" name="enquiry_followdate" class="form-control" id="enquiry_followdate" min="2023-09-04">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3" id="btn_trial">
                                    <label class="col-sm-3 control-lable"></label>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary btn-lg" id="enquiry_btnsave" name="action" value="save"><i class="fa fa-save"></i> SAVE</button>
                                        <button type="submit" class="btn btn-primary btn-lg" id="enquiry_btnget" onclick="myFunctionget()"><i class="fa fa-user"></i> GET</button>
                                        <button type="button" class="btn btn-primary btn-lg" id="enquiry_btntrial" onclick="myFunctiontrial()"><i class="fa fa-tasks"></i> TRIAL</button>
                                    </div>
                                </div>
                                <div id="enq_msg text-center" style="color:red;">

                                </div>
                                <input type="hidden" name="inactivememid1" id="inactivememid1">
                            </div>

                            <div class="div_trial" id="enquiry_div_trial">
                                <div class="row mt-3">
                                    <div class="col-sm-12">
                                        <label> Trial Services </label>
                                        <input type="text" name="text_trialservices" id="text_trialservices" class="form-control" onkeydown="uppderCaseF(this)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Start Date </label>
                                        <input type="date" class="form-control" name="trial_startdate" id="trial_startdate" min="2023-09-04">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>End Date </label>
                                        <input type="date" class="form-control" name="trial_enddate" id="trial_enddate" min="2023-09-04">
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="btn btn-info" type="submit" name="action" value="trial_save"> Confirm </button>
                                    <label class="btn btn-info" onclick="btn_trialcancel()"> Cancel </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>