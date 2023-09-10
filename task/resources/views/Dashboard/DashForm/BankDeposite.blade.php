<div role="dialog" class="modal fade in" id="staticBankDeposite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 40%;">

        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Bank Deposite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="BankDepositeform" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label for="duration"><span style="font-weight: 100;color: #f9870d;;">Date</span></label>
                                <input type="date" id="expensesdate" name="expensesdate" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;" value="2023-09-04">
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <span id="spn_expensecategory" style="font-weight: 100;text-transform: capitalize;color:#f9870d;">Bank Category *</span>
                                        <select id="expensestype" name="expensestype" style="width:300px;border-radius: 5px;font-family: initial;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true" disabled="">
                                            <option value="13">BANK DEPOSIT</option>
                                        </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 300px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-expensestype-container"><span class="select2-selection__rendered" id="select2-expensestype-container" title="BANK DEPOSIT">BANK DEPOSIT</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-sm-3" id="div_addExpCategory" style="display: none;">

                                        <i class="fa fa-plus-circle" style="font-size: 43px;margin-top: 20px;" onclick="add_expcategory()"></i>
                                    </div>
                                </div>
                                <!--  <input type="text" id="expensestype" name="expensestype" class="form-control" style="color: black; font-weight: 100;text-transform: uppercase;">   -->
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <span id="spn_expensesubcategory" style="font-weight: 100;text-transform: capitalize;color:#f9870d;">Bank Sub Category *</span>
                                        <select id="expensestype_cat" name="expensestype_cat" style="width:280px;border-radius: 5px;font-family: initial;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                            <option value="0">Select Sub Category</option>
                                            <option value="11">CASH DEPOSIT IN BANK</option>
                                            <option value="29">CHEQUE DEPOSIT</option>
                                            <option value="79">CASH GIVEN FOR SALARY</option>
                                            <option value="80">CASH GIVEN TO PRAVEEN SIR</option>
                                            <option value="127">CASH GIVEN TO MEMBER.</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 280px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-expensestype_cat-container"><span class="select2-selection__rendered" id="select2-expensestype_cat-container" title="Select Sub Category">Select Sub Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-sm-3">

                                        <i class="fa fa-plus-circle" style="font-size: 43px;margin-top: 20px;" onclick="add_expsubcategory()"></i>
                                    </div>
                                </div>
                                <!--  <input type="text" id="expensestype" name="expensestype" class="form-control" style="color: black; font-weight: 100;text-transform: uppercase;">   -->
                            </div>
                            <div class="col-lg-12"><label for="actualprice"><span id="spn_ExpenseAmount" style="font-weight: 100;color:#f9870d;;">Bank Deposit Amount *</span></label>
                                <input type="number" id="expensesamount" name="expensesamount" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;text-align: center;" fdprocessedid="f0s0o">
                            </div>
                            <div class="col-lg-12"><label for="offprice"><span style="font-weight: 100;color:#f9870d;;">Remark</span></label>
                                <input type="text" id="expensesremark" name="expensesremark" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;" fdprocessedid="2sm4jy">
                            </div>

                            <div class="col-lg-12" id="div_ExpenseType" style="display: none;"><label><span style="font-weight: 100;color:#f9870d;;">Expense From/Type</span></label>
                                <select id="txt_expensefrom" name="txt_expensefrom" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true" disabled="">
                                    <option value="0" selected="">Select</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Bank</option>
                                </select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-labelledby="select2-txt_expensefrom-container"><span class="select2-selection__rendered" id="select2-txt_expensefrom-container" title="Cash">Cash</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <br>
                            <div class="col-lg-12">
                                <label type="" id="expensessave" name="expensessave" class="btn btn-success" onclick="expensessave()" style="width: 100%;font-weight: 100;color: black;background-color: white;border: 1px solid;border-radius: 2px;height: 40px">Save</label>
                            </div>

                            <center>
                                <div id="msgepy1" style="color: red"></div>
                            </center>
                        </div>



                        <br><br>
                        <div class="col-lg-12" style="    margin-top: 50px">
                            <div class="col-lg-12" id="add_expcategory_div" style="display: none">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label id="lbl_expcate">Add New Expense Category</label>
                                        <input class="form-control" type="text" name="txt_expcatname" id="txt_expcatname" style="width:300px;text-transform: uppercase;">
                                    </div>
                                    <div class="col-sm-4">

                                        <label class="btn btn-info" style="margin-top: 20px" onclick="exp_addconfirm()"> ADD</label>
                                        <label class="btn btn-danger" style="margin-top: 20px" onclick="exp_addcancel()"> X</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12" id="add_expsubcategory_div" style="display: none">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label id="lbl_expsubcate">Add Under-<span id="spn_catname" style="color: green;font-weight: 600"></span></label>
                                        <input class="form-control" type="text" name="txt_expsubcatname" id="txt_expsubcatname" style="width:300px;text-transform: uppercase;">
                                    </div>
                                    <div class="col-sm-4">

                                        <label class="btn btn-info" style="margin-top: 20px" onclick="expsub_addconfirm()"> ADD</label>
                                        <label class="btn btn-danger" style="margin-top: 20px" onclick="expsub_addcancel()"> X</label>
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