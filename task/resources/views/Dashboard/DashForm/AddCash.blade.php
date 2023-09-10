<div role="dialog" class="modal fade in" id="staticAddCash" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 40%;">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Cash</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="Addcashform" method="post">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label for="duration"><span style="font-weight: 100;color: #f9870d;" id="spn_cashdate">Date</span></label>
                                <input type="date" id="txt_cashrecieved_date" name="txt_cashrecieved_date" class="form-control" style="color: black; font-weight: 100;" value="2023-09-04">
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <span id="spn_cashcategory" style="font-weight: 100;text-transform: capitalize;color:#f9870d;">Cash Recieved Category</span>
                                        <select id="sel_cashcategory" name="sel_cashcategory" style="width:300px;border-radius: 5px;font-family: initial;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                            <option value="0"> Select Cash Category</option>
                                            <option value="1">SALARY</option>
                                            <option value="2">EXPENSES</option>
                                            <option value="3">OUTSTANDING RECEIVED</option>
                                            <option value="4">CRICKET AMOUNT RECEIVED</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-sel_cashcategory-container"><span class="select2-selection__rendered" id="select2-sel_cashcategory-container" title=" Select Cash Category"> Select Cash Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-sm-3">

                                        <i class="fa fa-plus-circle" style="font-size: 43px;margin-top: 20px;" onclick="add_cashcategory()"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12"><label><span style="font-weight: 100;color:#f9870d;" id="span_cash_amount">Cash Amount</span></label>
                                <input type="number" id="txt_cash_amount" name="txt_cash_amount" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;text-align: center;" fdprocessedid="wpbmri">
                            </div>
                            <div class="col-lg-12"><label><span style="font-weight: 100;color:#f9870d;" id="span_cash_remark">Remark</span></label>
                                <input type="text" id="txt_cashrecieved_remark" name="txt_cashrecieved_remark" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;" fdprocessedid="nv5vb7">
                            </div>

                            <div class="col-lg-12"><label><span style="font-weight: 100;color:#f9870d;;" id="span_cash_from">Cash From/Type</span></label>
                                <select id="txt_cashfrom" name="txt_cashfrom" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0" selected="">Select</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Bank</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-txt_cashfrom-container"><span class="select2-selection__rendered" id="select2-txt_cashfrom-container" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <br>
                            <div class="col-lg-12">
                                <label class="btn btn-success" onclick="saveCASHRECIEVED()" style="width: 100%;font-weight: 100;color: black;background-color: white;border: 1px solid;border-radius: 2px;height: 40px">Save</label>
                            </div>

                            <center>
                                <div id="msg_alert" style="color: red"></div>
                            </center>
                        </div>



                        <br><br>
                        <div class="col-lg-12" style="    margin-top: 50px">
                            <div class="col-lg-12" id="add_cashcategory_div" style="display: none">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label id="lbl_cashcate">Add Cash Recieved Category</label>
                                        <input class="form-control" type="text" name="txt_cashcatname" id="txt_cashcatname" style="width:300px;text-transform: uppercase;">
                                    </div>
                                    <div class="col-sm-4">

                                        <label class="btn btn-info" style="margin-top: 20px" onclick="cash_addconfirm()"> ADD</label>
                                        <label class="btn btn-danger" style="margin-top: 20px" onclick="cash_addcancel()"> X</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>