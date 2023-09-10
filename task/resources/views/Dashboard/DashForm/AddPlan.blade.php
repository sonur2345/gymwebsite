<div class="modal fade" id="staticAddPlan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 60%;">
        <form id="packform" method="post" action="/AddPlan/save">
    @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"> Add Plan/Package</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex">
                        <div class="col-lg-3 mt-2">
                            <label>Package Name </label>
                        </div>
                        <div class="col-lg-9 mt-2">
                            <input type="browsers" class="form-control" name="text_Packagename" id="text_Packagename">
                        </div>
                        <div class="col-lg-3 mt-2">
                            <label>Services </label>
                        </div>
                        <div class="col-lg-9 mt-2">
                            <input type="browsers" class="form-control" name="text_browsersname" id="text_browsersname">
                        </div>
                        <div class="col-md-12 mt-4">
                            <fieldset id="tenurefieldset">
                                <legend>TENURE</legend>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h6>Name</h6>
                                        <select class="form-control" id="select_tenure" name="tenure_name">
                                            <option value="0">Select</option>
                                            <option value="GYM">GYM</option>
                                            <option value="PERSONAL TRAINING">PERSONAL TRAINING</option>
                                            <option value="CROSS FIT">CROSS FIT</option>
                                            <option value="STUDIO">STUDIO</option>
                                            <option value="N.C.">N.C.</option>
                                            <option value="BODY COMPOSITION ANALYSIS">BODY COMPOSITION ANALYSIS</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <h6>Surfix</h6>
                                        <input type="text" name="surfix" class="form-control name_list" id="text_tenure" onkeydown="upperCase(this)">
                                    </div>
                                    <div class="col-lg-2">
                                        <h6>Amount</h6>
                                        <input type="number" name="text_tenureamount" class="form-control name_list" id="text_tenureamount" onkeydown="upperCase(this)">
                                    </div>
                                    <div class="col-lg-2">
                                        <h6>Duration</h6>
                                        <input type="number" name="tenureduration" class="form-control name_list" id="text_tenureduration" onkeydown="upperCase(this)">
                                    </div>
                                    <div class="col-lg-1 mt-2">
                                        <label id="addplan" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                        </label>
                                    </div>
                                </div>
                                <div id="addplandiv"></div>
                            </fieldset>
                        </div>

                        <div class="col-md-12 mt-4">
                            <fieldset id="tenurefieldset">
                                <legend>COMPLIMENTRY</legend>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h6>Name</h6>
                                        <input type="text" name="complimentryname" class="form-control name_list" id="txt_complimentry" onkeydown="upperCase(this)">
                                    </div>

                                    <div class="col-lg-2">
                                        <h6>Duration</h6>
                                        <input type="number" name="complimentryduration" class="form-control name_list" id="txt_complimentryduration" onkeydown="upperCase(this)">
                                    </div>
                                    <div class="col-lg-2 mt-2">
                                        <label id="addcomp" class="btn btn-success">
                                            <i class="fa fa-plus"></i>
                                        </label>
                                    </div>
                                </div>
                                <div id="addcompdiv"></div>

                            </fieldset>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-center mt-4">
                                <h6 style="font-weight: 100;">PLAN PRICE</h6>
                                <input type="number" name="text_planprice" id="text_planprice">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary" >CREATE PACKAGE</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>