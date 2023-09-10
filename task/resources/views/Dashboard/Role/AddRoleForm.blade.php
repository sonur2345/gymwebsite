<div class="modal fade" id="staticAddRoleForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 40%;">
<form method="post" class="form-gruop" action="/Role/add" enctype="multipart/form-data">
    @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticAddRoleLabel"> Add New Role </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mt-4">
                        <label>Role Name </label>
                        <input type="text" name="Role_name" class="form-control" required>
                        </div>
                        <div class="mt-4">
                        <label> Role Type </label>
                        <select class="form-control" name="Role_type">
                            <option value="NORMAL">NORMAL</option>
                            <option value="PERSONAL TRAINING">PERSONAL TRAINING</option>
                            <option value="SESSION WISE">SESSION WISE</option>
                            <option value="FIXED">FIXED</option>
                            <option value="DAILY PAY">DAILY PAY</option>
                        </select>
                        </div>
                        <div class="mt-4">
                        <label> Is Sales Incentive </label>
                        <select class="form-control" name="Is_sale_incentive">
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>  
                        </div>

                    </div>
                    <div class="col-md-6 mt-4">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-primary">Add Role</button>
                </div>
            </div>
        </div>
</form>
    </div>
</div>