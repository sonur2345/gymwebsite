<div role="dialog" class="modal modal-warning fade" id="edit{{$Role->id}}"  tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background: #6f6b6b;">
                <h5 class="modal-title" id="staticAddRoleLabel" style="color: #fff;"> Add New Emolyee </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <form method="post" class="form-gruop" action="/Role/{{ $Role->id }}/edit" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-b-8">
                            <div class="col-xs-12 col-xs-12">
                                <div class="row p-2">
                                    <div class="col-xs-12 col-md-4">
                                        <label>Name</label>
                                        <input type="text" class="form-control" id="role_name" name="role_name" value="{{$Role->Role_name}}" placeholder="Name">
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label>Role type </label>
                                      

                                       <select class="form-control" name="select_role">
                            <option value="NORMAL">NORMAL</option>
                            <option value="PERSONAL TRAINING">PERSONAL TRAINING</option>
                            <option value="SESSION WISE">SESSION WISE</option>
                            <option value="FIXED">FIXED</option>
                            <option value="DAILY PAY">DAILY PAY</option>
                        </select>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-4">
                                        <label>Is Sales Incentive</label>
                                       <select class="form-control" name="Is_sale_incentive"> 
                                        <option value="{{$Role->Is_sale_incentive}}"> 
                                        Yes
                                        </option>
                                        <option value="{{$Role->Is_sale_incentive}}"> 
                                        No
                                        </option>
                                       </select>
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