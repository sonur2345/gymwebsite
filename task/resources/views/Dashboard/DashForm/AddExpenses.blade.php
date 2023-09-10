<div class="modal fade in" id="staticAddExpenses" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 40%;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Add Expenses </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="AddExpensesform" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <label for="duration">Date</label>
                                <input type="date" id="addexpenses_date" name="expensesdate" class="form-control" value="2023-09-04">
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <span id="spn_addexpensecategory">Expense Category *</span>
                                        <select id="addexpenses_selecttype" name="expensestype" tabindex="-1" class="form-control select2-hidden-accessible" aria-hidden="true">
                                            <option value="0" selected="">Select Expense Category</option>
                                            <option value="64">YOGA</option>
                                            <option value="63">CAKE</option>
                                            <option value="62">LIGHT</option>
                                            <option value="61">CARPENTER WORK</option>
                                            <option value="60">ROOM FRESHNER</option>
                                            <option value="59">TV RECHARGE</option>
                                            <option value="58">SIM</option>
                                            <option value="57">GYM ANNIVERSARY</option>
                                            <option value="56">GANESH JI MURTI</option>
                                            <option value="55">MIRROR EXPENSE(FITTING)</option>
                                            <option value="54">MIRROR EXPENSE(FITTING)</option>
                                            <option value="53">FRUITS</option>
                                            <option value="52">WALLPAPER</option>
                                            <option value="51">DECORATION MATERIAL</option>
                                            <option value="50">TUBE</option>
                                            <option value="49">TV REGHARGE</option>
                                            <option value="48">GYM EQUIPMENTS</option>
                                            <option value="47">PAINTER</option>
                                            <option value="46">AC MAINTENANCE</option>
                                            <option value="45">AQUARIUM CLEAN</option>
                                            <option value="44">MAT PURCHASE</option>
                                            <option value="43">ADVANCE</option>
                                            <option value="42">DIESEL EXPENSE</option>
                                            <option value="41">COOKING COMPETITION</option>
                                            <option value="40">DIWALI EXPENSE</option>
                                            <option value="39">ADVERTISEMENT</option>
                                            <option value="38">MOBILE RECHARGE</option>
                                            <option value="37">PEST CONTROL</option>
                                            <option value="36">CARD READER</option>
                                            <option value="35">FLEX PURCHASE</option>
                                            <option value="34">HARDWARE EXPENSES</option>
                                            <option value="33">STEAM EXPENSE</option>
                                            <option value="32">DSLR CAMERA PURCHASE</option>
                                            <option value="31">MEDICAL ITEM</option>
                                            <option value="30">VISHWAKARMA MATERIAL</option>
                                            <option value="29">ANIVERSARY EXPENSE</option>
                                            <option value="28">GANESH POOJA SAMAGRI</option>
                                            <option value="27">GANESH POOJA SAMAGRI</option>
                                            <option value="26">DIESE EXPENSES</option>
                                            <option value="25">CARTRIGE REFILING</option>
                                            <option value="24">LOCKER</option>
                                            <option value="23">HOLI FESTIVAL EXPENSES</option>
                                            <option value="22">SALARY EXPENSESE</option>
                                            <option value="21">CRICKET EXPENSE</option>
                                            <option value="20">TV RECHARGE</option>
                                            <option value="19">PRINTER</option>
                                            <option value="18">GEYSER</option>
                                            <option value="17">PRESSER PUMP REPAIRING</option>
                                            <option value="16">MISCELLANEOUS EXPENSES</option>
                                            <option value="15">LANDLINE BILL</option>
                                            <option value="14">KENT RO </option>
                                            <option value="12">COMPUTER </option>
                                            <option value="11">STATIONARY EXPENSE</option>
                                            <option value="10">GENERATER EXPENSES</option>
                                            <option value="9">ELECTRICITY EXPENSES</option>
                                            <option value="8">LANDLINE EXPENSES</option>
                                            <option value="7">PETROL EXPENSES</option>
                                            <option value="6">NEWS PAPER BILL</option>
                                            <option value="5">HOUSE KEEPING EXPENSES</option>
                                            <option value="4">MAINTENANCE</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 300px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-expensestype-container"><span class="select2-selection__rendered" id="select2-expensestype-container" title="Select Expense Category">Select Expense Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-sm-3" id="div_addExpCategory">

                                        <i class="fa fa-plus-circle" style="font-size: 43px;margin-top: 20px;" onclick="add_expcategory()"></i>
                                    </div>
                                </div>
                                <!--  <input type="text" id="expensestype" name="expensestype" class="form-control" style="color: black; font-weight: 100;text-transform: uppercase;">   -->
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <span id="spn_expensesubcategory" style="font-weight: 100;text-transform: capitalize;color:#f9870d;">Expense Sub Category *</span>
                                        <select id="expensestype_cat" name="expensestype_cat" style="width:280px;border-radius: 5px;font-family: initial;" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                            <option value="0">Select Sub Category</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 280px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-expensestype_cat-container"><span class="select2-selection__rendered" id="select2-expensestype_cat-container" title="Select Sub Category">Select Sub Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-sm-3">

                                        <i class="fa fa-plus-circle" style="font-size: 43px;margin-top: 20px;" onclick="add_expsubcategory()"></i>
                                    </div>
                                </div>
                                <!--  <input type="text" id="expensestype" name="expensestype" class="form-control" style="color: black; font-weight: 100;text-transform: uppercase;">   -->
                            </div>
                            <div class="col-lg-12"><label for="actualprice"><span id="spn_ExpenseAmount" style="font-weight: 100;color:#f9870d;;">Expense Amount *</span></label>
                                <input type="number" id="expensesamount" name="expensesamount" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;text-align: center;" fdprocessedid="f0s0o">
                            </div>
                            <div class="col-lg-12"><label for="offprice"><span style="font-weight: 100;color:#f9870d;;">Remark</span></label>
                                <input type="text" id="expensesremark" name="expensesremark" class="form-control" style="color: black; font-weight: 100;text-transform: capitalize;" fdprocessedid="2sm4jy">
                            </div>

                            <div class="col-lg-12" id="div_ExpenseType"><label><span style="font-weight: 100;color:#f9870d;;">Expense From/Type</span></label>
                                <select id="txt_expensefrom" name="txt_expensefrom" class="form-control select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="0" selected="">Select</option>
                                    <option value="1">Cash</option>
                                    <option value="2">Bank</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-txt_expensefrom-container"><span class="select2-selection__rendered" id="select2-txt_expensefrom-container" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                            </div> <br>
                            <div class="col-lg-12">
                                <label type="" id="expensessave" name="expensessave" class="btn btn-success" onclick="expensessave()" style="width: 100%;font-weight: 100;color: black;background-color: white;border: 1px solid;border-radius: 2px;height: 40px">Save</label>
                            </div>

                            <div id="msgepy1" style="color: red"></div>

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