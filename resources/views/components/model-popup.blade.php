    @if(!Route::is(['attendance','budget-expenses','budget-revenues','budgets']))
    <!-- Add Asset Modal -->
    <div id="add_asset" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Asset</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset Id</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase Date</label>
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase From</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Manufacturer</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Supplier</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Condition</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Warranty</label>
                                    <input class="form-control" type="text" placeholder="In Months">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Value</label>
                                    <input placeholder="$1800" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset User</label>
                                    <select class="select">
                                        <option>John Doe</option>
                                        <option>Richard Miles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                        <option>Deployed</option>
                                        <option>Damaged</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Asset Modal -->
    
    <!-- Edit Asset Modal -->
    <div id="edit_asset" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Asset</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset Name</label>
                                    <input class="form-control" type="text" value="Dell Laptop">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset Id</label>
                                    <input class="form-control" type="text" value="#AST-0001" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase Date</label>
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase From</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Manufacturer</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Model</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Serial Number</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Supplier</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Condition</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Warranty</label>
                                    <input class="form-control" type="text" placeholder="In Months">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Value</label>
                                    <input placeholder="$1800" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Asset User</label>
                                    <select class="select">
                                        <option>John Doe</option>
                                        <option>Richard Miles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                        <option>Deployed</option>
                                        <option>Damaged</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Asset Modal -->
    
    <!-- Delete Asset Modal -->
    <div class="modal custom-modal fade" id="delete_asset" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Asset</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Asset Modal -->
    @endif
    @if(Route::is(['attendance']))
    <!-- Attendance Modal -->
    <div class="modal custom-modal fade" id="attendance_info" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Attendance Info</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card punch-status">
                                <div class="card-body">
                                    <h5 class="card-title">Timesheet <small class="text-muted">11 Mar 2019</small></h5>
                                    <div class="punch-det">
                                        <h6>Punch In at</h6>
                                        <p>Wed, 11th Mar 2019 10.00 AM</p>
                                    </div>
                                    <div class="punch-info">
                                        <div class="punch-hours">
                                            <span>3.45 hrs</span>
                                        </div>
                                    </div>
                                    <div class="punch-det">
                                        <h6>Punch Out at</h6>
                                        <p>Wed, 20th Feb 2019 9.00 PM</p>
                                    </div>
                                    <div class="statistics">
                                        <div class="row">
                                            <div class="col-md-6 col-6 text-center">
                                                <div class="stats-box">
                                                    <p>Break</p>
                                                    <h6>1.21 hrs</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6 text-center">
                                                <div class="stats-box">
                                                    <p>Overtime</p>
                                                    <h6>3 hrs</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card recent-activity">
                                <div class="card-body">
                                    <h5 class="card-title">Activity</h5>
                                    <ul class="res-activity-list">
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                10.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                11.00 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                11.15 AM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                1.30 PM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch In at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                2.00 PM.
                                            </p>
                                        </li>
                                        <li>
                                            <p class="mb-0">Punch Out at</p>
                                            <p class="res-activity-time">
                                                <i class="far fa-clock"></i>
                                                7.30 PM.
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Attendance Modal -->
    @endif
    @if(Route::is(['budget-expenses','budget-revenues','budgets']))
     @if(!Route::is(['budget-revenues','budgets']))
    <!-- Add Modal -->
    <div class="modal custom-modal fade" id="add_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Expenses</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group form-row row">
                        <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="800.00" name="amount">
                        </div>
                        <div class="col-lg-6">
                            <select name="currency_symbol" class="form-control">
                                <option value="$ - AUD">$ - Australian Dollar</option>
                                <option value="Bs. - VEF">Bs. - Bolívar Fuerte</option>
                                <option value="R$ - BRL">R$ - Brazilian Real</option>
                                <option value="£ - GBP">£ - British Pound</option>
                                <option value="$ - CAD">$ - Canadian Dollar</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Notes <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <textarea class="form-control ta" name="notes"></textarea>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Expense Date <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input class="datepicker-input form-control" type="text" value="07-05-2021" name="expense_date" data-date-format="dd-mm-yyyy">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select name="category" class="form-control m-b" id="main_category">
                                <option value="" disabled="" selected="">Choose Category</option>
                                <option value="1">project1</option>
                                <option value="3">test category</option>
                                <option value="4">Hardware</option>
                                <option value="5">Material</option>
                                <option value="6">Vehicle</option>
                                <option value="8">TestctrE</option>
                                <option value="9">Twocatr</option>
                                <option value="10">fesferwf</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Sub Category <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select name="sub_category" class="form-control m-b" id="sub_category">
                                <option value="">Choose Sub-Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row  position-relative">
                        <label class="col-lg-12 control-label">Attach File</label>
                        <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal custom-modal fade" id="edit_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Expenses</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                  <div class="modal-body">
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" placeholder="800.00" name="amount">
                        </div>
                        <div class="col-lg-6">
                            <select name="currency_symbol" class="form-control">
                                <option value="$ - AUD">$ - Australian Dollar</option>
                                <option value="Bs. - VEF">Bs. - Bolívar Fuerte</option>
                                <option value="R$ - BRL">R$ - Brazilian Real</option>
                                <option value="£ - GBP">£ - British Pound</option>
                                <option value="$ - CAD">$ - Canadian Dollar</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Notes <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <textarea class="form-control ta" name="notes"></textarea>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Expense Date <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <input class="datepicker-input form-control" type="text" value="07-05-2021" name="expense_date" data-date-format="dd-mm-yyyy">
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select name="category" class="form-control m-b" id="main_category1">
                                <option value="" disabled="" selected="">Choose Category</option>
                                <option value="1">project1</option>
                                <option value="3">test category</option>
                                <option value="4">Hardware</option>
                                <option value="5">Material</option>
                                <option value="6">Vehicle</option>
                                <option value="8">TestctrE</option>
                                <option value="9">Twocatr</option>
                                <option value="10">fesferwf</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label class="col-lg-12 control-label">Sub Category <span class="text-danger">*</span></label>
                        <div class="col-lg-12">
                            <select name="sub_category" class="form-control m-b" id="sub_category1">
                                <option value="">Choose Sub-Category</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-row  position-relative">
                        <label class="col-lg-12 control-label">Attach File</label>
                        <div class="col-lg-12">
                            
                            <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
    @endif
    @if(Route::is(['budget-revenues']))
    <!-- Add Modal -->
    <div class="modal custom-modal fade" id="add_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Revenues</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Amount 
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" name="amount">
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Notes 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea class="form-control ta" name="notes"></textarea>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Revenue Date 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input class="datepicker-input form-control" type="text" name="revenue_date" data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Category 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <select name="category" class="form-control m-b" id="main_category">
                                        <option value="" disabled="" selected="">Choose Category</option>
                                        <option value="1">project1</option>
                                        <option value="3">test category</option>
                                        <option value="4">Hardware</option>
                                        <option value="5">Material</option>
                                        <option value="6">Vehicle</option>
                                        <option value="8">TestctrE</option>
                                        <option value="9">Twocatr</option>
                                        <option value="10">fesferwf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Sub Category 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <select name="sub_category" class="form-control m-b" id="sub_category">
                                        <option value="">Choose Sub-Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label">Attach File</label>
                                <div class="col-lg-12">
                                    <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                                    </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal custom-modal fade" id="edit_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Revenues</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Amount 
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" value="800.00" name="amount">
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Notes 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <textarea class="form-control ta" name="notes">Lorem i[sum is simply dummy text</textarea>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Revenue Date 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <input class="datepicker-input form-control" type="text" value="06-05-2021" name="revenue_date" data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Category 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <select name="category" class="form-control m-b" id="main_category1">
                                        <option value="" disabled="" selected="">Choose Category</option>
                                        <option value="1">project1</option>
                                        <option value="3">test category</option>
                                        <option value="4">Hardware</option>
                                        <option value="5">Material</option>
                                        <option value="6">Vehicle</option>
                                        <option value="8">TestctrE</option>
                                        <option value="9">Twocatr</option>
                                        <option value="10">fesferwf</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label class="col-lg-12 control-label">Sub Category 
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-12">
                                    <select name="sub_category" class="form-control m-b" id="sub_category1">
                                        <option value="">Choose Sub-Category</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label">Attach File</label>
                                <input type="file" class="form-control" data-buttontext="Choose File" data-icon="false" data-classbutton="btn btn-default" data-classinput="form-control inline input-s" name="receipt">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
    @endif
    @if(Route::is(['budgets']))
    <!-- Add Modal -->
    <div class="modal custom-modal fade" id="add_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Budget</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                <div class="form-group">
                    <label>Budget Title</label>
                    <input class="form-control" type="text" name="budget_title" placeholder="Budgets Title">
                </div>

                    <label>Choose Budget Respect Type</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input BudgetType" type="radio" name="budget_type" id="project2" value="project">
                      <label class="form-check-label" for="project2">Project</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input BudgetType" type="radio" name="budget_type" id="category1" value="category">
                      <label class="form-check-label" for="category1">Category</label>
                    </div>
            
                </div>

                <div class="form-group">
                    <label>Start Date</label>
                    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_start_date" placeholder="Start Date" data-date-format="dd-mm-yyyy"></div>
                </div>
                <div class="form-group">
                    <label>End Date</label>
                    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_end_date" placeholder="End Date" data-date-format="dd-mm-yyyy"></div>
                </div>

                <div class="form-group">
                    <label>Expected Revenues</label>
                </div>
                <div class="AllRevenuesClass">
                    <div class="row AlLRevenues">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Revenue Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control RevenuETitle" value="" placeholder="Revenue Title" name="revenue_title[]" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Revenue Amount <span class="text-danger">*</span></label>
                                <input type="text" name="revenue_amount[]" placeholder="Amount" value="" class="form-control RevenuEAmount" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="add-more">
                                <a class="add_more_revenue" title="Add Revenue" style="cursor: pointer;" ><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Overall Revenues <span class="text-danger">(A)</span></label>
                    <input class="form-control" type="text" name="overall_revenues" id="overall_revenues1" placeholder="Overall Revenues" readonly style="cursor: not-allowed;">
                </div>

                <div class="form-group">
                    <label>Expected Expenses</label>
                </div>
                <div class="AllExpensesClass">
                    <div class="row AlLExpenses">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Expenses Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control EXpensesTItle" value="" placeholder="Expenses Title" name="expenses_title[]" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Expenses Amount <span class="text-danger">*</span></label>
                                <input type="text" name="expenses_amount[]" placeholder="Amount" value="" class="form-control EXpensesAmount" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="add-more">
                                <a class="add_more_expenses" title="Add Expenses" style="cursor: pointer;"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Overall Expense <span class="text-danger">(B)</span></label>
                    <input class="form-control" type="text" name="overall_expenses" id="overall_expenses1" placeholder="Overall Expenses" readonly style="cursor: not-allowed;">
                </div>


                <div class="form-group">
                    <label>Expected Profit <span class="text-danger">( C = A - B )</span> </label>
                    <input class="form-control" type="text" name="expected_profit" id="expected_profit1" placeholder="Expected Profit" readonly style="cursor: not-allowed;">
                </div>

                <div class="form-group">
                    <label>Tax <span class="text-danger">(D)</span></label>
                    <input class="form-control" type="text" name="tax_amount" id="tax_amount1" placeholder="Tax Amount">
                </div>

                <div class="form-group">
                    <label>Budget Amount <span class="text-danger">( E = C - D )</span> </label>
                    <input class="form-control" type="text" name="budget_amount" id="budget_amount1" placeholder="Budget Amount" readonly style="cursor: not-allowed;">
                </div>
                <div class=" submit-section">
                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal custom-modal fade" id="edit_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Budget</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                <form>
                <div class="form-group">
                    <label>Budget Title</label>
                    <input class="form-control" type="text" name="budget_title" placeholder="Budgets Title">
                </div>

                    <label>Choose Budget Respect Type</label>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input BudgetType" type="radio" name="budget_type" id="project1" value="project">
                      <label class="form-check-label" for="project1">Project</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input BudgetType" type="radio" name="budget_type" id="category" value="category">
                      <label class="form-check-label" for="category">Category</label>
                    </div>
            
                </div>

                <div class="form-group">
                    <label>Start Date</label>
                    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_start_date" placeholder="Start Date" data-date-format="dd-mm-yyyy"></div>
                </div>
                <div class="form-group">
                    <label>End Date</label>
                    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name="budget_end_date" placeholder="End Date" data-date-format="dd-mm-yyyy"></div>
                </div>

                <div class="form-group">
                    <label>Expected Revenues</label>
                </div>
                <div class="AllRevenuesClass">
                    <div class="row AlLRevenues">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Revenue Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control RevenuETitle" value="" placeholder="Revenue Title" name="revenue_title[]" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Revenue Amount <span class="text-danger">*</span></label>
                                <input type="text" name="revenue_amount[]" placeholder="Amount" value="" class="form-control RevenuEAmount" autocomplete="off" >
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="add-more">
                                <a class="add_more_revenue" title="Add Revenue" style="cursor: pointer;" ><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Overall Revenues <span class="text-danger">(A)</span></label>
                    <input class="form-control" type="text" name="overall_revenues" id="overall_revenues" placeholder="Overall Revenues" readonly style="cursor: not-allowed;">
                </div>

                <div class="form-group">
                    <label>Expected Expenses</label>
                </div>
                <div class="AllExpensesClass">
                    <div class="row AlLExpenses">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Expenses Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control EXpensesTItle" value="" placeholder="Expenses Title" name="expenses_title[]" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Expenses Amount <span class="text-danger">*</span></label>
                                <input type="text" name="expenses_amount[]" placeholder="Amount" value="" class="form-control EXpensesAmount" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="add-more">
                                <a class="add_more_expenses" title="Add Expenses" style="cursor: pointer;"><i class="fa fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Overall Expense <span class="text-danger">(B)</span></label>
                    <input class="form-control" type="text" name="overall_expenses" id="overall_expenses" placeholder="Overall Expenses" readonly style="cursor: not-allowed;">
                </div>


                <div class="form-group">
                    <label>Expected Profit <span class="text-danger">( C = A - B )</span> </label>
                    <input class="form-control" type="text" name="expected_profit" id="expected_profit" placeholder="Expected Profit" readonly style="cursor: not-allowed;">
                </div>

                <div class="form-group">
                    <label>Tax <span class="text-danger">(D)</span></label>
                    <input class="form-control" type="text" name="tax_amount" id="tax_amount" placeholder="Tax Amount">
                </div>

                <div class="form-group">
                    <label>Budget Amount <span class="text-danger">( E = C - D )</span> </label>
                    <input class="form-control" type="text" name="budget_amount" id="budget_amount" placeholder="Budget Amount" readonly style="cursor: not-allowed;">
                </div>
                <div class="submit-section">
                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-primary submit-btn">Submit</button>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->
    @endif
    <!-- Delete Holiday Modal -->
    <div class="modal custom-modal fade" id="delete" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete </h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Holiday Modal -->
    @endif
    @if(Route::is(['calender']))
    <!-- Add Event Modal -->
    <div id="add_event" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Event</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Event Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Event Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Category</label>
                            <select class="select form-control">
                                <option>Danger</option>
                                <option>Success</option>
                                <option>Purple</option>
                                <option>Primary</option>
                                <option>Pink</option>
                                <option>Info</option>
                                <option>Inverse</option>
                                <option>Orange</option>
                                <option>Brown</option>
                                <option>Teal</option>
                                <option>Warning</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Event Modal -->
    
    <!-- Event Modal -->
    <div class="modal custom-modal fade" id="event-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Event</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-success submit-btn save-event">Create event</button>
                    <button type="button" class="btn btn-danger submit-btn delete-event" data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Event Modal -->
    
    <!-- Add Category Modal-->
    <div class="modal custom-modal fade" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a category</h4>
                </div>
                <div class="modal-body p-20">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="col-form-label">Category Name</label>
                                <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">Choose Category Color</label>
                                <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="pink">Pink</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                    <option value="orange">Orange</option>
                                    <option value="brown">Brown</option>
                                    <option value="teal">Teal</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="button" class="btn btn-danger save-category" data-bs-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Category Modal-->
    @endif
    @if(Route::is(['candidates']))
    <!-- Add Employee Modal -->
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Candidates</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Created Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Employee Modal -->

    <!-- Edit Job Modal -->
    <div id="edit_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Candidates</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label class="col-form-label">Created Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->

    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @if(Route::is(['categories']))
    <!-- Add Holiday Modal -->
    <div class="modal custom-modal fade" id="add_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Categories Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Holiday Modal -->
    
    <!-- Edit Holiday Modal -->
    <div class="modal custom-modal fade" id="edit_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Categories Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Hardware">
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Holiday Modal -->
    @endif
     @if(Route::is(['chat']))               
    <!-- Drogfiles Modal -->
    <div id="drag_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Drag and drop files upload</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="js-upload-form">
                        <div class="upload-drop-zone" id="drop-zone">
                            <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                        </div>
                        <h4>Uploading</h4>
                        <ul class="upload-list">
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        photo.png
                                    </div>
                                    <div class="file-size">1.07 gb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-file"></i>
                                        task.doc
                                    </div>
                                    <div class="file-size">5.8 kb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        dashboard.png
                                    </div>
                                    <div class="file-size">2.1 mb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">Completed</div>
                            </li>
                        </ul>
                    </form>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Drogfiles Modal -->
    
    <!-- Add Group Modal -->
    <div id="add_group" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a group</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                    <form>
                    <div class="form-group">
                        <label>Group Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Group Modal -->
    
    <!-- Add Chat User Modal -->
    <div id="add_chat_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Direct Chat</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to start a chat" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <h5>Recent Conversations</h5>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                        <div class="text-nowrap align-self-center">
                                            <div class="online-date">1 day ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Bernardo Galaviz</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">3 days ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body text-nowrap align-self-center flex-grow-1">
                                            <div class="user-name">John Doe</div>
                                            <span class="designation">Web Designer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">7 months ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Chat User Modal -->
    
    <!-- Share Files Modal -->
    <div id="share_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="files-share-list">
                        <div class="files-cont">
                            <div class="file-type">
                                <span class="files-icon"><i class="far fa-file-pdf"></i></span>
                            </div>
                            <div class="files-info">
                                <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Share With</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share Files Modal -->
    @endif
    @if(Route::is(['clients-list','clients']))
    <!-- Add Client Modal -->
    <div id="add_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Client</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control floating" type="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                    <input class="form-control floating" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Company Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chat</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Estimates</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Invoices</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Client Modal -->
    
    <!-- Edit Client Modal -->
    <div id="edit_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Client</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" value="Barry" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" value="Cuda" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" value="barrycuda" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control floating" value="barrycuda@example.com" type="email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" value="barrycuda" type="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input class="form-control" value="barrycuda" type="password">
                                </div>
                            </div>
                            <div class="col-md-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                    <input class="form-control floating" value="CLT-0001" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" value="9876543210" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">Company Name</label>
                                    <input class="form-control" type="text" value="Global Technologies">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chat</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Estimates</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Invoices</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Client Modal -->
    <!-- Delete Client Modal -->
    <div class="modal custom-modal fade" id="delete_client" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Client</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Client Modal -->
    @endif
    @if(Route::is(['contacts'])) 
    <!-- Add Contact Modal -->
    <div class="modal custom-modal fade" id="add_contact" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Contact</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="email">
                        </div>
                        <div class="form-group">
                            <label>Contact Number <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="contact_status" class="check">
                                <label for="contact_status" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Contact Modal -->
    
    <!-- Edit Contact Modal -->
    <div class="modal custom-modal fade" id="edit_contact" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Contact</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="email" value="johndoe@example.com">
                        </div>
                        <div class="form-group">
                            <label>Contact Number <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="9876543210">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="edit_contact_status" class="check">
                                <label for="edit_contact_status" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Contact Modal -->

    <!-- Delete Contact Modal -->
    <div class="modal custom-modal fade" id="delete_contact" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Contact</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Contact Modal --> 
    @endif
    @if(Route::is(['departments']))          
    <!-- Add Department Modal -->
    <div id="add_department" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Department</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Department Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Department Modal -->
    
    <!-- Edit Department Modal -->
    <div id="edit_department" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Department</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Department Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="IT Management" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Department Modal -->

    <!-- Delete Department Modal -->
    <div class="modal custom-modal fade" id="delete_department" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Department</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Department Modal -->
    @endif 
    @if(Route::is(['designations'])) 
    <!-- Add Designation Modal -->
    <div id="add_designation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Designation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Designation Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Department</option>
                                <option>Web Development</option>
                                <option>IT Management</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Designation Modal -->
    
    <!-- Edit Designation Modal -->
    <div id="edit_designation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Designation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Designation Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="Web Developer" type="text">
                        </div>
                        <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Department</option>
                                <option>Web Development</option>
                                <option>IT Management</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Designation Modal -->
    
    <!-- Delete Designation Modal -->
    <div class="modal custom-modal fade" id="delete_designation" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Designation</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Designation Modal -->
    @endif
    @if(Route::is(['employees-list','employees'])) 
    <!-- Add Employee Modal -->
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Employee</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Company</label>
                                    <select class="select">
                                        <option value="">Global Technologies</option>
                                        <option value="1">Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Department</option>
                                        <option>Web Development</option>
                                        <option>IT Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Designation</option>
                                        <option>Web Designer</option>
                                        <option>Web Developer</option>
                                        <option>Android Developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Holidays</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leaves</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Clients</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chats</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Assets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Employee Modal -->
    
    <!-- Edit Employee Modal -->
    <div id="edit_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Employee</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" value="John" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" value="Doe" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                    <input class="form-control" value="johndoe" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" value="johndoe@example.com" type="email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" value="johndoe" type="password">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Confirm Password</label>
                                    <input class="form-control" value="johndoe" type="password">
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" value="FT-0001" readonly class="form-control floating">
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <div class="form-group">
                                    <label class="col-form-label">Joining Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" value="9876543210" type="text">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Company</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                        <option selected>International Software Inc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Department</option>
                                        <option>Web Development</option>
                                        <option>IT Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Designation</option>
                                        <option>Web Designer</option>
                                        <option>Web Developer</option>
                                        <option>Android Developer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Holidays</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leaves</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Clients</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chats</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Assets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Employee Modal -->
    
    <!-- Delete Employee Modal -->
    <div class="modal custom-modal fade" id="delete_employee" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Employee</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Employee Modal --> 
    @endif
    @if(Route::is(['estimates'])) 
    <!-- Delete Estimate Modal -->
    <div class="modal custom-modal fade" id="delete_estimate" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Estimate</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Estimate Modal -->
    @endif
    @if(Route::is(['expenses']))
    <!-- Add Expense Modal -->
    <div id="add_expense" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Expense</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase From</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase Date</label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchased By </label>
                                    <select class="select">
                                        <option>Daniel Porter</option>
                                        <option>Roger Dixon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input placeholder="$50" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paid By</label>
                                    <select class="select">
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Attachments</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="attach-files">
                            <ul>
                                <li>
                                    <img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="">
                                    <a href="#" class="fa fa-close file-remove"></a>
                                </li>
                                <li>
                                    <img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="">
                                    <a href="#" class="fa fa-close file-remove"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Expense Modal -->
    
    <!-- Edit Expense Modal -->
    <div id="edit_expense" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Expense</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Item Name</label>
                                    <input class="form-control" value="Dell Laptop" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase From</label>
                                    <input class="form-control" value="Amazon" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchase Date</label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Purchased By </label>
                                    <select class="select">
                                        <option>Daniel Porter</option>
                                        <option>Roger Dixon</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input placeholder="$50" class="form-control" value="$10000" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Paid By</label>
                                    <select class="select">
                                        <option>Cash</option>
                                        <option>Cheque</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option>Pending</option>
                                        <option>Approved</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Attachments</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="attach-files">
                            <ul>
                                <li>
                                    <img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="">
                                    <a href="#" class="fa fa-close file-remove"></a>
                                </li>
                                <li>
                                    <img src="{{ URL::asset('/assets/img/placeholder.jpg')}}" alt="">
                                    <a href="#" class="fa fa-close file-remove"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Expense Modal -->

    <!-- Delete Expense Modal -->
    <div class="modal custom-modal fade" id="delete_expense" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Expense</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Expense Modal -->
    @endif
    @if(Route::is(['experience-level']))
    <!-- Add Employee Modal -->
    <div id="add_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Experience Level</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Experience Level <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Employee Modal -->

    <!-- Edit Job Modal -->
    <div id="edit_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Candidates</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Experience Level <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="1-3">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->

    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @if(Route::is(['goal-tracking']))
    <!-- Add Goal Modal -->
    <div id="add_goal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Goal Tracking</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Goal Type</label>
                                    <select class="select">
                                        <option>Invoice Goal</option>
                                        <option>Event Goal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Subject</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Target Achievement</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Goal Modal -->
    
    <!-- Edit Goal Modal -->
    <div id="edit_goal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Goal Tracking</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Goal Type</label>
                                    <select class="select">
                                        <option selected>Invoice Goal</option>
                                        <option>Event Goal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Subject</label>
                                    <input class="form-control" type="text" value="Test Goal">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Target Achievement</label>
                                    <input class="form-control" type="text" value="Lorem ipsum dollar">
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 mb-3">
                                <div class="form-group">
                                    <label for="customRange">Progress</label>
                                    <input type="range" class="form-control-range form-range" id="customRange">
                                    <div class="mt-2" id="result">Progress Value: <b></b></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4">Lorem ipsum dollar</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Goal Modal -->
    
    <!-- Delete Goal Modal -->
    <div class="modal custom-modal fade" id="delete_goal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Goal Tracking List</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Goal Modal -->
    @endif
    @if(Route::is(['goal-type']))
    <!-- Add Goal Modal -->
    <div id="add_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Goal Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Goal Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status</label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Goal Modal -->
    
    <!-- Edit Goal Modal -->
    <div id="edit_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Goal Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Goal Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Invoice Goal">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status</label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Goal Modal -->
    
    <!-- Delete Goal Modal -->
    <div class="modal custom-modal fade" id="delete_type" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Goal Type</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Goal Modal -->
    @endif
    @if(Route::is(['holidays','tasks']))
    <!-- Add Holiday Modal -->
    <div class="modal custom-modal fade" id="add_holiday" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Holiday</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Holiday Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Holiday Date <span class="text-danger">*</span></label>
                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Holiday Modal -->
    @if(Route::is(['holidays']))
    <!-- Edit Holiday Modal -->
    <div class="modal custom-modal fade" id="edit_holiday" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Holiday</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Holiday Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="New Year" type="text">
                        </div>
                        <div class="form-group">
                            <label>Holiday Date <span class="text-danger">*</span></label>
                            <div class="cal-icon"><input class="form-control datetimepicker" value="01-01-2019" type="text"></div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Holiday Modal -->

    <!-- Delete Holiday Modal -->
    <div class="modal custom-modal fade" id="delete_holiday" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Holiday</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Holiday Modal -->
    @endif
    @endif
    @if(Route::is(['interview-questions']))
    <!-- Add Questions Modal -->
    <div id="add_question" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Questions</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Category</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Web Development</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Accounts Management</option>
                                        <option>Support Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Questions</label>
                                    <textarea class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option A</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option B</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option C</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option D</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Correct Answer</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option>Option A</option>
                                        <option>Option B</option>
                                        <option>Option C</option>
                                        <option>Option D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Code Snippets</label>
                                    <textarea class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Answer Explanation</label>
                                    <textarea class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Video Link</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Image To Question</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Questions Modal -->


    <!-- Add Category Modal -->
    <div id="add_category" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Category</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Questions Modal -->

    <!-- Edit Job Modal -->
    <div id="edit_question" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Questions</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>HTML</option>
                                        <option>CSS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Web Development</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Accounts Management</option>
                                        <option>Support Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Add Questions</label>
                                    <textarea class="form-control">
                                        IS management has decided to rewrite a legacy customer relations system using fourth generation languages (4GLs). Which of the following risks is MOST often associated with system development using 4GLs?
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option A</label>
                                    <input class="form-control" type="text" value="Design facilities">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option B</label>
                                    <input class="form-control" type="text" value="language subsets">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option C</label>
                                    <input class="form-control" type="text" value="Lack of portability">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Option D</label>
                                    <input class="form-control" type="text" value="Inability to perform data">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Correct Answer</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Option A</option>
                                        <option>Option B</option>
                                        <option>Option C</option>
                                        <option>Option D</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Code Snippets</label>
                                    <textarea class="form-control">
                                    
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Answer Explanation</label>
                                    <textarea class="form-control">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Video Link</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Image To Question</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->

    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @if(Route::is(['job-details','shortlist-candidates']))
    <!-- Edit Job Modal -->
    <div id="edit_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input class="form-control" type="text" value="Web Developer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Web Development</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Accounts Management</option>
                                        <option>Support Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Location</label>
                                    <input class="form-control" type="text" value="California">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Vacancies</label>
                                    <input class="form-control" type="text" value="5">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" type="text" value="2 Years">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text" value="-">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary From</label>
                                    <input type="text" class="form-control" value="32k">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary To</label>
                                    <input type="text" class="form-control" value="38k">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Type</label>
                                    <select class="select">
                                        <option selected>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Temporary</option>
                                        <option>Remote</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option selected>Open</option>
                                        <option>Closed</option>
                                        <option>Cancelled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Expired Date</label>
                                    <input type="text" class="form-control datetimepicker" value="31 May 2019">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->
    @if(Route::is(['shortlist-candidates']))
    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @endif
    @if(Route::is(['job-view']))
    <!-- Apply Job Modal -->
    <div class="modal custom-modal fade" id="apply_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Your Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload your CV</label>
                            <input type="file" class="form-control" id="cv_upload">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Apply Job Modal -->
    @endif
    @if(Route::is(['jobs','manage-resumes','offer-approvals']))
    @if(!Route::is(['manage-resumes','offer-approvals']))
    <!-- Add Job Modal -->
    <div id="add_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Job</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option>Web Development</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Accounts Management</option>
                                        <option>Support Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Location</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Vacancies</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary From</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary To</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Type</label>
                                    <select class="select">
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Temporary</option>
                                        <option>Remote</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option>Open</option>
                                        <option>Closed</option>
                                        <option>Cancelled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Expired Date</label>
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Job Modal -->
    
    <!-- Edit Job Modal -->
    <div id="edit_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Job</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input class="form-control" type="text" value="Web Developer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Web Development</option>
                                        <option>Application Development</option>
                                        <option>IT Management</option>
                                        <option>Accounts Management</option>
                                        <option>Support Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Location</label>
                                    <input class="form-control" type="text" value="California">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Vacancies</label>
                                    <input class="form-control" type="text" value="5">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Experience</label>
                                    <input class="form-control" type="text" value="2 Years">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input class="form-control" type="text" value="-">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary From</label>
                                    <input type="text" class="form-control" value="32k">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salary To</label>
                                    <input type="text" class="form-control" value="38k">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Type</label>
                                    <select class="select">
                                        <option selected>Full Time</option>
                                        <option>Part Time</option>
                                        <option>Internship</option>
                                        <option>Temporary</option>
                                        <option>Remote</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="select">
                                        <option selected>Open</option>
                                        <option>Closed</option>
                                        <option>Cancelled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Expired Date</label>
                                    <input type="text" class="form-control datetimepicker" value="31 May 2019">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->
    @endif
    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Job</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @if(Route::is(['leave-settings']))
    <!-- Add Custom Policy Modal -->
    <div id="add_custom_policy" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Custom Policy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Policy Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group leave-duallist">
                            <label>Add employee</label>
                            <div class="row">
                                <div class="col-lg-5 col-sm-5">
                                    <select name="customleave_from" id="customleave_select" class="form-control" size="5" multiple="multiple">
                                        <option value="1">Bernardo Galaviz </option>
                                        <option value="2">Jeffrey Warden</option>
                                        <option value="2">John Doe</option>
                                        <option value="2">John Smith</option>
                                        <option value="3">Mike Litorus</option>
                                    </select>
                                </div>
                                <div class="multiselect-controls col-lg-2 col-sm-2 d-grid gap-2">
                                    <button type="button" id="customleave_select_rightAll" class="btn w-100 btn-white"><i class="fa fa-forward"></i></button>
                                    <button type="button" id="customleave_select_rightSelected" class="btn w-100 btn-white"><i class="fa fa-chevron-right"></i></button>
                                    <button type="button" id="customleave_select_leftSelected" class="btn w-100 btn-white"><i class="fa fa-chevron-left"></i></button>
                                    <button type="button" id="customleave_select_leftAll" class="btn w-100 btn-white"><i class="fa fa-backward"></i></button>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <select name="customleave_to" id="customleave_select_to" class="form-control" size="8" multiple="multiple"></select>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Custom Policy Modal -->
    
    <!-- Edit Custom Policy Modal -->
    <div id="edit_custom_policy" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Custom Policy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Policy Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="LOP">
                        </div>
                        <div class="form-group">
                            <label>Days <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="4">
                        </div>
                        <div class="form-group leave-duallist">
                            <label>Add employee</label>
                            <div class="row">
                                <div class="col-lg-5 col-sm-5">
                                    <select name="edit_customleave_from" id="edit_customleave_select" class="form-control" size="5" multiple="multiple">
                                        <option value="1">Bernardo Galaviz </option>
                                        <option value="2">Jeffrey Warden</option>
                                        <option value="2">John Doe</option>
                                        <option value="2">John Smith</option>
                                        <option value="3">Mike Litorus</option>
                                    </select>
                                </div>
                                <div class="multiselect-controls col-lg-2 col-sm-2 d-grid gap-2">
                                    <button type="button" id="edit_customleave_select_rightAll" class="btn w-100 btn-white"><i class="fa fa-forward"></i></button>
                                    <button type="button" id="edit_customleave_select_rightSelected" class="btn w-100 btn-white"><i class="fa fa-chevron-right"></i></button>
                                    <button type="button" id="edit_customleave_select_leftSelected" class="btn w-100 btn-white"><i class="fa fa-chevron-left"></i></button>
                                    <button type="button" id="edit_customleave_select_leftAll" class="btn w-100 btn-white"><i class="fa fa-backward"></i></button>
                                </div>
                                <div class="col-lg-5 col-sm-5">
                                    <select name="customleave_to" id="edit_customleave_select_to" class="form-control" size="8" multiple="multiple"></select>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Custom Policy Modal -->
    
    <!-- Delete Custom Policy Modal -->
    <div class="modal custom-modal fade" id="delete_custom_policy" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Custom Policy</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Custom Policy Modal -->
    @endif
    @if(Route::is(['leave-type']))
    <!-- Add Leavetype Modal -->
    <div id="add_leavetype" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Leave Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Leavetype Modal -->
    
    <!-- Edit Leavetype Modal -->
    <div id="edit_leavetype" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leave Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Casual Leave">
                        </div>
                        <div class="form-group">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="12">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Leavetype Modal -->
    
    <!-- Delete Leavetype Modal -->
    <div class="modal custom-modal fade" id="delete_leavetype" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Leave Type</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Leavetype Modal -->
    @endif
    @if(Route::is(['leaves']))
    <!-- Add Leave Modal -->
    <div id="add_leave" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Leave</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="form-group col-md-12">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Leave Type</option>
                                <option>Casual Leave 12 Days</option>
                                <option>Medical Leave</option>
                                <option>Loss of Pay</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>From <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>To <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" readonly type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Remaining Leaves <span class="text-danger">*</span></label>
                            <input class="form-control" readonly value="12" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Leave Reason <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-section col-md-12">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Leave Modal -->
    
    <!-- Edit Leave Modal -->
    <div id="edit_leave" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Leave</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="form-group col-md-12">
                            <label>Leave Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Leave Type</option>
                                <option>Casual Leave 12 Days</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>From <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>To <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" value="01-01-2019" type="text">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Number of days <span class="text-danger">*</span></label>
                            <input class="form-control" readonly type="text" value="2">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Remaining Leaves <span class="text-danger">*</span></label>
                            <input class="form-control" readonly value="12" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Leave Reason <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control">Going to hospital</textarea>
                        </div>
                        <div class="submit-section col-md-12">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Leave Modal -->
    
    <!-- Delete Leave Modal -->
    <div class="modal custom-modal fade" id="delete_approve" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Leave</h3>
                        <p>Are you sure want to Cancel this leave?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Leave Modal -->
    @endif
    @if(Route::is(['overtime']))
    <!-- Add Overtime Modal -->
    <div id="add_overtime" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Overtime</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Select Employee <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>-</option>
                                <option>John Doe</option>
                                <option>Richard Miles</option>
                                <option>John Smith</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Overtime Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Overtime Hours <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Overtime Modal -->
    
    <!-- Edit Overtime Modal -->
    <div id="edit_overtime" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Overtime</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Select Employee <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>-</option>
                                <option>John Doe</option>
                                <option>Richard Miles</option>
                                <option>John Smith</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Overtime Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input class="form-control datetimepicker" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Overtime Hours <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Overtime Modal -->
    
    <!-- Delete Overtime Modal -->
    <div class="modal custom-modal fade" id="delete_overtime" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Overtime</h3>
                        <p>Are you sure want to Cancel this?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Overtime Modal -->
    @endif
    @if(Route::is(['payroll-items']))
    <!-- Add Addition Modal -->
    <div id="add_addition" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Addition</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Category <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select a category</option>
                                <option>Monthly remuneration</option>
                                <option>Additional remuneration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Unit calculation</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="unit_calculation" class="check">
                                <label for="unit_calculation" class="checktoggle"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit Amount</label>
                            <div class="input-group">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control">
                                    <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Assignee</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="addition_assignee" id="addition_no_emp" value="option1" checked>
                                <label class="form-check-label" for="addition_no_emp">
                                No assignee
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="addition_assignee" id="addition_all_emp" value="option2">
                                <label class="form-check-label" for="addition_all_emp">
                                All employees
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="addition_assignee" id="addition_single_emp" value="option3">
                                <label class="form-check-label" for="addition_single_emp">
                                Select Employee
                                </label>
                            </div>
                            <div class="form-group">
                                <select class="select">
                                    <option>-</option>
                                    <option>Select All</option>
                                    <option>John Doe</option>
                                    <option>Richard Miles</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Addition Modal -->
    
    <!-- Edit Addition Modal -->
    <div id="edit_addition" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Addition</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Category <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select a category</option>
                                <option>Monthly remuneration</option>
                                <option>Additional remuneration</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Unit calculation</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="edit_unit_calculation" class="check">
                                <label for="edit_unit_calculation" class="checktoggle"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit Amount</label>
                            <div class="input-group">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control">
                                    <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Assignee</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_no_emp" value="option1" checked>
                                <label class="form-check-label" for="edit_addition_no_emp">
                                No assignee
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_all_emp" value="option2">
                                <label class="form-check-label" for="edit_addition_all_emp">
                                All employees
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_addition_assignee" id="edit_addition_single_emp" value="option3">
                                <label class="form-check-label" for="edit_addition_single_emp">
                                Select Employee
                                </label>
                            </div>
                            <div class="form-group">
                                <select class="select">
                                    <option>-</option>
                                    <option>Select All</option>
                                    <option>John Doe</option>
                                    <option>Richard Miles</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Addition Modal -->
    
    <!-- Delete Addition Modal -->
    <div class="modal custom-modal fade" id="delete_addition" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Addition</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Addition Modal -->
    
    <!-- Add Overtime Modal -->
    <div id="add_overtime" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Overtime</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Rate Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>-</option>
                                <option>Daily Rate</option>
                                <option>Hourly Rate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rate <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Overtime Modal -->
    
    <!-- Edit Overtime Modal -->
    <div id="edit_overtime" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Overtime</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Rate Type <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>-</option>
                                <option>Daily Rate</option>
                                <option>Hourly Rate</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Rate <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Overtime Modal -->
    
    <!-- Delete Overtime Modal -->
    <div class="modal custom-modal fade" id="delete_overtime" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Overtime</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Overtime Modal -->
    
    <!-- Add Deduction Modal -->
    <div id="add_deduction" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Deduction</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Unit calculation</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="unit_calculation_deduction" class="check">
                                <label for="unit_calculation_deduction" class="checktoggle"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit Amount</label>
                            <div class="input-group">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control">
                                    <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Assignee</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_no_emp" value="option1" checked>
                                <label class="form-check-label" for="deduction_no_emp">
                                No assignee
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_all_emp" value="option2">
                                <label class="form-check-label" for="deduction_all_emp">
                                All employees
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="deduction_assignee" id="deduction_single_emp" value="option3">
                                <label class="form-check-label" for="deduction_single_emp">
                                Select Employee
                                </label>
                            </div>
                            <div class="form-group">
                                <select class="select">
                                    <option>-</option>
                                    <option>Select All</option>
                                    <option>John Doe</option>
                                    <option>Richard Miles</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Deduction Modal -->
    
    <!-- Edit Deduction Modal -->
    <div id="edit_deduction" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Deduction</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Unit calculation</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="edit_unit_calculation_deduction" class="check">
                                <label for="edit_unit_calculation_deduction" class="checktoggle"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Unit Amount</label>
                            <div class="input-group">
                                    <span class="input-group-text">$</span>
                                <input type="text" class="form-control">
                                    <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Assignee</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_no_emp" value="option1" checked>
                                <label class="form-check-label" for="edit_deduction_no_emp">
                                No assignee
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_all_emp" value="option2">
                                <label class="form-check-label" for="edit_deduction_all_emp">
                                All employees
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="edit_deduction_assignee" id="edit_deduction_single_emp" value="option3">
                                <label class="form-check-label" for="edit_deduction_single_emp">
                                Select Employee
                                </label>
                            </div>
                            <div class="form-group">
                                <select class="select">
                                    <option>-</option>
                                    <option>Select All</option>
                                    <option>John Doe</option>
                                    <option>Richard Miles</option>
                                </select>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Addition Modal -->
    
    <!-- Delete Deduction Modal -->
    <div class="modal custom-modal fade" id="delete_deduction" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Deduction</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Deduction Modal -->
    @endif
      @if(Route::is(['ticket-view']))
        <!-- Edit Ticket Modal -->
        <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Ticket</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ticket Subject</label>
                                        <input class="form-control" type="text" value="Laptop Issue">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ticket Id</label>
                                        <input class="form-control" type="text" readonly value="TKT-0001">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Assign Staff</label>
                                        <select class="select">
                                            <option>-</option>
                                            <option selected>Mike Litorus</option>
                                            <option>John Smith</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select class="select">
                                            <option>-</option>
                                            <option >Delta Infotech</option>
                                            <option selected>International Software Inc</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Priority</label>
                                        <select class="select">
                                            <option>High</option>
                                            <option selected>Medium</option>
                                            <option>Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CC</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Assign</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ticket Assignee</label>
                                        <div class="project-members">
                                            <a title="John Smith" data-bs-toggle="tooltip" href="#" >
                                                <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Add Followers</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ticket Followers</label>
                                        <div class="project-members">
                                            <a title="Richard Miles" data-bs-toggle="tooltip" href="#" class="avatar">
                                                <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                            </a>
                                            <a title="John Smith" data-bs-toggle="tooltip" href="#" class="avatar">
                                                <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                            </a>
                                            <a title="Mike Litorus" data-bs-toggle="tooltip" href="#" class="avatar">
                                                <img src="assets/img/profiles/avatar-05.jpg" alt="">
                                            </a>
                                            <a title="Wilmer Deluna" data-bs-toggle="tooltip" href="#" class="avatar">
                                                <img src="assets/img/profiles/avatar-11.jpg" alt="">
                                            </a>
                                            <span class="all-team">+2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Files</label>
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Ticket Modal -->
        
        <!-- Delete Ticket Modal -->
        <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Ticket</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Ticket Modal -->
        
        <!-- Assignee Modal -->
        <div id="assignee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Assign to this task</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group m-b-30">
                            <input placeholder="Search to add" class="form-control search-input" type="text">
                                <button class="btn btn-primary">Search</button>
                        </div>
                        <div>
                            <ul class="chat-user-list">
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-09.jpg" alt="">
                                            </span>
                                            <div class="media-body align-self-center text-nowrap flex-grow-1">
                                                <div class="user-name">Richard Miles</div>
                                                <span class="designation">Web Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                            </span>
                                            <div class="media-body align-self-center text-nowrap flex-grow-1">
                                                <div class="user-name">John Smith</div>
                                                <span class="designation">Android Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                            </span>
                                            <div class="media-body align-self-center text-nowrap flex-grow-1">
                                                <div class="user-name">Jeffery Lalor</div>
                                                <span class="designation">Team Leader</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Assign</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Assignee Modal -->
        
        <!-- Task Followers Modal -->
        <div id="task_followers" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add followers to this task</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group m-b-30">
                            <input placeholder="Search to add" class="form-control search-input" type="text">
                                <button class="btn btn-primary">Search</button>
                        </div>
                        <div>
                            <ul class="chat-user-list">
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-10.jpg" alt="">
                                            </span>
                                            <div class="media-body media-middle text-nowrap flex-grow-1">
                                                <div class="user-name">Jeffery Lalor</div>
                                                <span class="designation">Team Leader</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-08.jpg" alt="">
                                            </span>
                                            <div class="media-body media-middle text-nowrap flex-grow-1">
                                                <div class="user-name">Catherine Manseau</div>
                                                <span class="designation">Android Developer</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img src="assets/img/profiles/avatar-11.jpg" alt="">
                                            </span>
                                            <div class="media-body media-middle text-nowrap flex-grow-1">
                                                <div class="user-name">Wilmer Deluna</div>
                                                <span class="designation">Team Leader</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Add to Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Task Followers Modal -->
    @endif
    @if(Route::is(['performance-appraisal']))
    <!-- Add Performance Appraisal Modal -->
    <div id="add_appraisal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Give Performance Appraisal</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employee</label>
                                    <select class="select">
                                        <option>Select Employee</option>
                                        <option>John Doe</option>
                                        <option>Mike Litorus</option>
                                    </select>
                                </div>                                          
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Select Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-box">
                                            <div class="row user-tabs">
                                                <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                    <ul class="nav nav-tabs nav-tabs-solid">
                                                        <li class="nav-item"><a href="{{url('#appr_technical')}}" data-bs-toggle="tab" class="nav-link active">Technical</a></li>
                                                        <li class="nav-item"><a href="{{url('#appr_organizational')}}" data-bs-toggle="tab" class="nav-link">Organizational</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div id="appr_technical" class="pro-overview tab-pane fade show active">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="bg-white">
                                                            <table class="table">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Technical Competencies</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <tr>
                                                                    <th colspan="2">Indicator</th>
                                                                    <th colspan="2">Expected Value</th>
                                                                    <th>Set Value</th>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Customer Experience</td>
                                                                    <td colspan="2">Intermediate</td>
                                                                    <td><select name="customer_experience" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Marketing</td>
                                                                    <td colspan="2">Advanced</td>
                                                                    <td><select name="marketing" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Management</td>
                                                                    <td colspan="2">Advanced</td>
                                                                    <td><select name="management" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Administration</td>
                                                                    <td colspan="2">Advanced</td>
                                                                    <td><select name="administration" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Presentation Skill</td>
                                                                    <td colspan="2">Expert / Leader</td>
                                                                    <td><select name="presentation_skill" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Quality Of Work</td>
                                                                    <td colspan="2">Expert / Leader</td>
                                                                    <td><select name="quality_of_work" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td colspan="2">Efficiency</td>
                                                                    <td colspan="2">Expert / Leader</td>
                                                                    <td><select name="efficiency" class="form-control">
                                                                        <option value="">None</option>
                                                                        <option value="1"> Beginner</option>
                                                                        <option value="2"> Intermediate</option>
                                                                        <option value="3"> Advanced</option>
                                                                        <option value="4"> Expert / Leader</option>
                                                                      </select></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="appr_organizational">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="bg-white">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Organizational Competencies</th>
                                                                        <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th colspan="2">Indicator</th>
                                                                        <th colspan="2">Expected Value</th>
                                                                        <th>Set Value</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Integrity</td>
                                                                        <td colspan="2">Beginner</td>
                                                                        <td>
                                                                            <select name="integrity" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Professionalism</td>
                                                                        <td colspan="2">Beginner</td>
                                                                        <td>
                                                                            <select name="professionalism" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Team Work</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="team_work" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Critical Thinking</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="critical_thinking" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Conflict Management</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="conflict_management" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Attendance</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="attendance" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Ability To Meet Deadline</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="ability_to_meet_deadline" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Performance Appraisal Modal -->
    
    <!-- Edit Performance Appraisal Modal -->
    <div id="edit_appraisal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Performance Appraisal</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employee</label>
                                    <select class="select">
                                        <option>Select Employee</option>
                                        <option>John Doe</option>
                                        <option selected>Mike Litorus</option>
                                    </select>
                                </div>                                          
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Select Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="7/08/2019" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="tab-box">
                                            <div class="row user-tabs">
                                                <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                                                    <ul class="nav nav-tabs nav-tabs-solid">
                                                        <li class="nav-item"><a href="{{url('#appr_technical1')}}" data-bs-toggle="tab" class="nav-link active">Technical</a></li>
                                                        <li class="nav-item"><a href="{{url('#appr_organizational1')}}" data-bs-toggle="tab" class="nav-link">Organizational</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div id="appr_technical1" class="pro-overview tab-pane fade show active">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="bg-white">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Technical Competencies</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th colspan="2">Indicator</th>
                                                                        <th colspan="2">Expected Value</th>
                                                                        <th>Set Value</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Customer Experience</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="customer_experience" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Marketing</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="marketing" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Management</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="management" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Administration</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="administration" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Presentation Skill</td>
                                                                        <td colspan="2">Expert / Leader</td>
                                                                        <td>
                                                                            <select name="presentation_skill" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Quality Of Work</td>
                                                                        <td colspan="2">Expert / Leader</td>
                                                                        <td>
                                                                            <select name="quality_of_work" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Efficiency</td>
                                                                        <td colspan="2">Expert / Leader</td>
                                                                        <td>
                                                                            <select name="efficiency" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                                <option value="4"> Expert / Leader</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="appr_organizational1">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="bg-white">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Organizational Competencies</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th colspan="2">Indicator</th>
                                                                        <th colspan="2">Expected Value</th>
                                                                        <th>Set Value</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Integrity</td>
                                                                        <td colspan="2">Beginner</td>
                                                                        <td>
                                                                            <select name="integrity" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Professionalism</td>
                                                                        <td colspan="2">Beginner</td>
                                                                        <td>
                                                                            <select name="professionalism" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Team Work</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="team_work" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Critical Thinking</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="critical_thinking" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Conflict Management</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="conflict_management" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Attendance</td>
                                                                        <td colspan="2">Intermediate</td>
                                                                        <td>
                                                                            <select name="attendance" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="2">Ability To Meet Deadline</td>
                                                                        <td colspan="2">Advanced</td>
                                                                        <td>
                                                                            <select name="ability_to_meet_deadline" class="form-control">
                                                                                <option value="">None</option>
                                                                                <option value="1"> Beginner</option>
                                                                                <option value="2"> Intermediate</option>
                                                                                <option value="3"> Advanced</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Performance Appraisal Modal -->
    
    <!-- Delete Performance Appraisal Modal -->
    <div class="modal custom-modal fade" id="delete_appraisal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Performance Appraisal List</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Performance Appraisal Modal -->
    @endif
    @if(Route::is(['performance-indicator']))
    <!-- Add Performance Indicator Modal -->
    <div id="add_indicator" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Set New Indicator</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Designation</label>
                                    <select class="select">
                                        <option>Select Designation</option>
                                        <option>Web Designer</option>
                                        <option>IOS Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-12">
                                <h4 class="modal-sub-title">Technical</h4>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Customer Experience</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>                                          
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Marketing</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Management</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Administration</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Presentation Skill</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Quality Of Work</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Efficiency</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <h4 class="modal-sub-title">Organizational</h4>
                            </div>

                            <div class="col-sm-4">              
                                <div class="form-group">
                                    <label class="col-form-label">Integrity</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Professionalism</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Team Work</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Critical Thinking</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Conflict Management</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Attendance</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Ability To Meet Deadline</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Performance Indicator Modal -->
    
    <!-- Edit Performance Indicator Modal -->
    <div id="edit_indicator" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Performance Indicator</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Designation</label>
                                    <select class="select">
                                        <option>Select Designation</option>
                                        <option selected>Web Designer</option>
                                        <option>IOS Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <h4 class="modal-sub-title">Technical</h4>
                            </div>

                            <div class="col-sm-4">                                          
                                <div class="form-group">
                                    <label class="col-form-label">Customer Experience</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option selected>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Marketing</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option selected>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Management</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option selected>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Administration</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option selected>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Presentation Skill</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Quality Of Work</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Efficiency</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <h4 class="modal-sub-title">Organizational</h4>
                            </div>

                            <div class="col-sm-4">                      
                                <div class="form-group">
                                    <label class="col-form-label">Integrity</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Professionalism</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option selected>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Team Work</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Critical Thinking</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option selected>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Conflict Management</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option selected>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Attendance</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option selected>Intermediate</option>
                                        <option>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Ability To Meet Deadline</label>
                                    <select class="select">
                                        <option>None</option>
                                        <option>Beginner</option>
                                        <option>Intermediate</option>
                                        <option selected>Advanced</option>
                                        <option>Expert / Leader</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12"></div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Performance Indicator Modal -->
    
    <!-- Delete Performance Indicator Modal -->
    <div class="modal custom-modal fade" id="delete_indicator" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Performance Indicator List</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Performance Indicator Modal -->
    @endif
    @if(Route::is(['policies']))
    <!-- Add Policy Modal -->
    <div id="add_policy" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Policy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Policy Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Department</label>
                            <select class="select">
                                <option>All Departments</option>
                                <option>Web Development</option>
                                <option>Marketing</option>
                                <option>IT Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Policy <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="policy_upload">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Policy Modal -->
    
    <!-- Edit Policy Modal -->
    <div id="edit_policy" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Policy</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Policy Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Leave Policy">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Department</label>
                            <select class="select">
                                <option>All Departments</option>
                                <option>Web Development</option>
                                <option>Marketing</option>
                                <option>IT Management</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Upload Policy <span class="text-danger">*</span></label>
                            <input type="file" class="form-control" id="edit_policy_upload">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Policy Modal -->
    
    <!-- Delete Policy Modal -->
    <div class="modal custom-modal fade" id="delete_policy" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Policy</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Policy Modal -->
    @endif
    @if(Route::is(['profile']))
    <!-- Profile Modal -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profile Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" value="John">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" value="Doe">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Birth Date</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" value="05/06/1985">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="select form-control">
                                                <option value="male selected">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" value="4487 Snowbird Lane">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" value="New York">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" value="United States">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" value="10523">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" value="631-889-3206">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Department</option>
                                        <option>Web Development</option>
                                        <option>IT Management</option>
                                        <option>Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Designation <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>Select Designation</option>
                                        <option>Web Designer</option>
                                        <option>Web Developer</option>
                                        <option>Android Developer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Reports To <span class="text-danger">*</span></label>
                                    <select class="select">
                                        <option>-</option>
                                        <option>Wilmer Deluna</option>
                                        <option>Lesley Grauer</option>
                                        <option>Jeffery Lalor</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Profile Modal -->
    
    <!-- Personal Info Modal -->
    <div id="personal_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport No</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Passport Expiry Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tel</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nationality <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Religion</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Marital status <span class="text-danger">*</span></label>
                                    <select class="select form-control">
                                        <option>-</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employment of spouse</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No. of children </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Personal Info Modal -->
    
    <!-- Family Info Modal -->
    <div id="family_info_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Family Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Family Member <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Relationship <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of birth <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Family Info Modal -->
    
    <!-- Emergency Contact Modal -->
    <div id="emergency_contact_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Personal Information</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Primary Contact</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone 2</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Primary Contact</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Relationship <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone 2</label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Emergency Contact Modal -->
    
    <!-- Education Modal -->
    <div id="education_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Education Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Oxford University" class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science" class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science" class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Education Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Oxford University" class="form-control floating">
                                                <label class="focus-label">Institution</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Computer Science" class="form-control floating">
                                                <label class="focus-label">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="01/06/2002" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Starting Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <div class="cal-icon">
                                                    <input type="text" value="31/05/2006" class="form-control floating datetimepicker">
                                                </div>
                                                <label class="focus-label">Complete Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="BE Computer Science" class="form-control floating">
                                                <label class="focus-label">Degree</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus focused">
                                                <input type="text" value="Grade A" class="form-control floating">
                                                <label class="focus-label">Grade</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Education Modal -->
    
    <!-- Experience Modal -->
    <div id="experience_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Experience Informations</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-scroll">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="United States">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                                </div>
                                                <label class="focus-label">Period To</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Experience Informations <a href="javascript:void(0);" class="delete-icon"><i class="far fa-trash-alt"></i></a></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Digital Devlopment Inc">
                                                <label class="focus-label">Company Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="United States">
                                                <label class="focus-label">Location</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <input type="text" class="form-control floating" value="Web Developer">
                                                <label class="focus-label">Job Position</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="01/07/2007">
                                                </div>
                                                <label class="focus-label">Period From</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <div class="cal-icon">
                                                    <input type="text" class="form-control floating datetimepicker" value="08/06/2018">
                                                </div>
                                                <label class="focus-label">Period To</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-more">
                                        <a href="javascript:void(0);"><i class="fa fa-plus-circle"></i> Add More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Experience Modal -->
    @endif
    @if(Route::is(['project-list','projects','tasks']))
    <!-- Create Project Modal -->
    <div id="create_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Project</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input placeholder="$50" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select class="select">
                                        <option>Hourly</option>
                                        <option>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Project Leader</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Leader</label>
                                    <div class="project-members">
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Team</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Members</label>
                                    <div class="project-members">
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Files</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Create Project Modal -->
    @if(!Route::is(['tasks']))
    <!-- Edit Project Modal -->
    <div id="edit_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" value="Project Management" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input placeholder="$50" class="form-control" value="$5000" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select class="select">
                                        <option>Hourly</option>
                                        <option selected>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option selected>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Project Leader</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Leader</label>
                                    <div class="project-members">
                                        <a href="#" data-bs-toggle="tooltip" title="Jeffery Lalor" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Team</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Members</label>
                                    <div class="project-members">
                                        <a href="#" data-bs-toggle="tooltip" title="John Doe" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="Richard Miles" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="John Smith" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                        <a href="#" data-bs-toggle="tooltip" title="Mike Litorus" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Files</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Project Modal -->
    
    <!-- Delete Project Modal -->
    <div class="modal custom-modal fade" id="delete_project" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Project</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Project Modal -->
    @endif
    @if(Route::is(['tasks']))
    <!-- Assignee Modal -->
    <div id="assignee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign to this task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to add" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Richard Miles</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">John Smith</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Assign</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Assignee Modal -->
    
    <!-- Task Followers Modal -->
    <div id="task_followers" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add followers to this task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to add" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}"></span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Catherine Manseau</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-26.jpg')}}"></span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Wilmer Deluna</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Add to Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Task Followers Modal -->
    @endif
    @endif
    @if(Route::is(['project-view','task-board']))
    <!-- Assign Leader Modal -->
    <div id="assign_leader" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Leader to this project</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to add a leader" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Richard Miles</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">John Smith</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Assign Leader Modal -->
    
    <!-- Assign User Modal -->
    <div id="assign_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign the user to this project</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search a user to assign" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Richard Miles</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">John Smith</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Assign User Modal -->
    @if(Route::is(['task-board']))
    <!-- Add Task Modal -->
    <div id="add_task_modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Task</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Task Priority</label>
                            <select class="form-control select">
                                <option>Select</option>
                                <option>High</option>
                                <option>Normal</option>
                                <option>Low</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Due Date</label>
                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                        </div>
                        <div class="form-group">
                            <label>Task Followers</label>
                            <input type="text" class="form-control" placeholder="Search to add">
                            <div class="task-follower-list">
                                <span data-bs-toggle="tooltip" title="John Doe">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" class="avatar" alt="John Doe" width="20" height="20">
                                    <i class="fa fa-times"></i>
                                </span>
                                <span data-bs-toggle="tooltip" title="Richard Miles">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" class="avatar" alt="Richard Miles" width="20" height="20">
                                    <i class="fa fa-times"></i>
                                </span>
                                <span data-bs-toggle="tooltip" title="John Smith">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" class="avatar" alt="John Smith" width="20" height="20">
                                    <i class="fa fa-times"></i>
                                </span>
                                <span data-bs-toggle="tooltip" title="Mike Litorus">
                                    <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" class="avatar" alt="Mike Litorus" width="20" height="20">
                                    <i class="fa fa-times"></i>
                                </span>
                            </div>
                        </div>
                        <div class="submit-section text-center">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Task Modal -->
    @endif
    <!-- Edit Project Modal -->
    <div id="edit_project" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Project</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input class="form-control" value="Project Management" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Rate</label>
                                    <input placeholder="$50" class="form-control" value="$5000" type="text">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select class="select">
                                        <option>Hourly</option>
                                        <option selected>Fixed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option selected>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Project Leader</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Leader</label>
                                    <div class="project-members">
                                        <a class="avatar" href="#" data-bs-toggle="tooltip" title="Jeffery Lalor">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Team</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Team Members</label>
                                    <div class="project-members">
                                        <a class="avatar" href="#" data-bs-toggle="tooltip" title="John Doe">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                        </a>
                                        <a class="avatar" href="#" data-bs-toggle="tooltip" title="Richard Miles">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}">
                                        </a>
                                        <a class="avatar" href="#" data-bs-toggle="tooltip" title="John Smith">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}">
                                        </a>
                                        <a class="avatar" href="#" data-bs-toggle="tooltip" title="Mike Litorus">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Upload Files</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Project Modal -->
    @endif
    @if(Route::is(['promotion']))
    <!-- Add Promotion Modal -->
    <div id="add_promotion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Promotion</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Promotion For <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Promotion From <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Web Developer" readonly>
                        </div>
                        <div class="form-group">
                            <label>Promotion To <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Web Developer</option>
                                <option>Web Designer</option>
                                <option>SEO Analyst</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Promotion Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Promotion Modal -->
    
    <!-- Edit Promotion Modal -->
    <div id="edit_promotion" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Promotion</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Promotion For <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Promotion From <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Web Developer" readonly>
                        </div>
                        <div class="form-group">
                            <label>Promotion To <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Web Developer</option>
                                <option>Web Designer</option>
                                <option>SEO Analyst</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Promotion Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Promotion Modal -->
    
    <!-- Delete Promotion Modal -->
    <div class="modal custom-modal fade" id="delete_promotion" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Promotion</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Promotion Modal -->
    @endif
    @if(Route::is(['provident-fund']))
    <!-- Add PF Modal -->
    <div id="add_pf" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Provident Fund</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <select class="form-control select">
                                        <option value="3">John Doe (FT-0001)</option>
                                        <option value="23">Richard Miles (FT-0002)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Provident Fund Type</label>
                                     <select class="form-control select">
                                        <option value="Fixed Amount" selected="">Fixed Amount</option>
                                        <option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="show-fixed-amount">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Employee Share (Amount)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Organization Share (Amount)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="show-basic-salary">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Employee Share (%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Organization Share (%)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add PF Modal -->
    
    <!-- Edit PF Modal -->
    <div id="edit_pf" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Provident Fund</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <select class="form-control select">
                                        <option value="3">John Doe (FT-0001)</option>
                                        <option value="23">Richard Miles (FT-0002)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Provident Fund Type</label>
                                     <select class="form-control select">
                                        <option value="Fixed Amount" selected="">Fixed Amount</option>
                                        <option value="Percentage of Basic Salary">Percentage of Basic Salary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="show-fixed-amount">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employee Share (Amount)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Organization Share (Amount)</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="show-basic-salary">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Employee Share (%)</label>
                                                <input class="form-control" type="text" value="2%">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Organization Share (%)</label>
                                                <input class="form-control" type="text" value="2%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit PF Modal -->
    
    <!-- Delete PF Modal -->
    <div class="modal custom-modal fade" id="delete_pf" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Provident Fund</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete PF Modal -->
    @endif
    @if(Route::is(['resignation']))
    <!-- Add Resignation Modal -->
    <div id="add_resignation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Resignation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Resigning Employee <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Notice Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resignation Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Resignation Modal -->
    
    <!-- Edit Resignation Modal -->
    <div id="edit_resignation" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Resignation</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Resigning Employee <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Notice Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" value="28/02/2019">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resignation Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" value="28/02/2019">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Resignation Modal -->
    
    <!-- Delete Resignation Modal -->
    <div class="modal custom-modal fade" id="delete_resignation" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Resignation</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Resignation Modal -->
    @endif
    @if(Route::is(['roles-permissions']))
    <!-- Add Role Modal -->
    <div id="add_role" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Role Modal -->
    
    <!-- Edit Role Modal -->
    <div id="edit_role" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Role Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="Team Leader" type="text">
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Role Modal -->

    <!-- Delete Role Modal -->
    <div class="modal custom-modal fade" id="delete_role" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Role</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Role Modal -->
    @endif
    @if(Route::is(['salary']))
    <!-- Add Salary Modal -->
    <div id="add_salary" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Staff Salary</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Select Staff</label>
                                    <select class="select"> 
                                        <option>John Doe</option>
                                        <option>Richard Miles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Net Salary</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <h4 class="text-primary">Earnings</h4>
                                <div class="form-group">
                                    <label>Basic</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>DA(40%)</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>HRA(15%)</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Conveyance</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Allowance</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Medical  Allowance</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="add-more">
                                    <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <h4 class="text-primary">Deductions</h4>
                                <div class="form-group">
                                    <label>TDS</label>
                                    <input class="form-control" type="text">
                                </div> 
                                <div class="form-group">
                                    <label>ESI</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>PF</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Leave</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Prof. Tax</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Labour Welfare</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="add-more">
                                    <a href="#"><i class="fa fa-plus-circle"></i> Add More</a>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Salary Modal -->
    
    <!-- Edit Salary Modal -->
    <div id="edit_salary" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Staff Salary</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <div class="form-group">
                                    <label>Select Staff</label>
                                    <select class="select"> 
                                        <option>John Doe</option>
                                        <option>Richard Miles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6"> 
                                <label>Net Salary</label>
                                <input class="form-control" type="text" value="$4000">
                            </div>
                        </div>
                        <div class="row"> 
                            <div class="col-sm-6"> 
                                <h4 class="text-primary">Earnings</h4>
                                <div class="form-group">
                                    <label>Basic</label>
                                    <input class="form-control" type="text" value="$6500">
                                </div>
                                <div class="form-group">
                                    <label>DA(40%)</label>
                                    <input class="form-control" type="text" value="$2000">
                                </div>
                                <div class="form-group">
                                    <label>HRA(15%)</label>
                                    <input class="form-control" type="text" value="$700">
                                </div>
                                <div class="form-group">
                                    <label>Conveyance</label>
                                    <input class="form-control" type="text" value="$70">
                                </div>
                                <div class="form-group">
                                    <label>Allowance</label>
                                    <input class="form-control" type="text" value="$30">
                                </div>
                                <div class="form-group">
                                    <label>Medical  Allowance</label>
                                    <input class="form-control" type="text" value="$20">
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <input class="form-control" type="text">
                                </div>  
                            </div>
                            <div class="col-sm-6">  
                                <h4 class="text-primary">Deductions</h4>
                                <div class="form-group">
                                    <label>TDS</label>
                                    <input class="form-control" type="text" value="$300">
                                </div> 
                                <div class="form-group">
                                    <label>ESI</label>
                                    <input class="form-control" type="text" value="$20">
                                </div>
                                <div class="form-group">
                                    <label>PF</label>
                                    <input class="form-control" type="text" value="$20">
                                </div>
                                <div class="form-group">
                                    <label>Leave</label>
                                    <input class="form-control" type="text" value="$250">
                                </div>
                                <div class="form-group">
                                    <label>Prof. Tax</label>
                                    <input class="form-control" type="text" value="$110">
                                </div>
                                <div class="form-group">
                                    <label>Labour Welfare</label>
                                    <input class="form-control" type="text" value="$10">
                                </div>
                                <div class="form-group">
                                    <label>Fund</label>
                                    <input class="form-control" type="text" value="$40">
                                </div>
                                <div class="form-group">
                                    <label>Others</label>
                                    <input class="form-control" type="text" value="$15">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Salary Modal -->
    
    <!-- Delete Salary Modal -->
    <div class="modal custom-modal fade" id="delete_salary" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Salary</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Salary Modal -->
    @endif
    @if(Route::is(['schedule-timing']))
    <!-- Edit Job Modal -->
    <div id="edit_job" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Schedule Date 1</label>
                                    <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <select class="select">
                                        <option>Select Time</option>
                                        <option selected>12:00 AM-01:00 AM</option>
                                        <option>01:00 AM-02:00 AM</option>
                                        <option>02:00 AM-03:00 AM</option>
                                        <option>03:00 AM-04:00 AM</option>
                                        <option>04:00 AM-05:00 AM</option>
                                        <option>05:00 AM-06:00 AM</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Schedule Date 2</label>
                                    <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <select class="select">
                                        <option>Select Time</option>
                                        <option selected>12:00 AM-01:00 AM</option>
                                        <option>01:00 AM-02:00 AM</option>
                                        <option>02:00 AM-03:00 AM</option>
                                        <option>03:00 AM-04:00 AM</option>
                                        <option>04:00 AM-05:00 AM</option>
                                        <option>05:00 AM-06:00 AM</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Schedule Date 3</label>
                                    <input type="text" class="form-control datetimepicker" value="3 Mar 2019">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Time</label>
                                    <select class="select">
                                        <option>Select Time</option>
                                        <option selected>12:00 AM-01:00 AM</option>
                                        <option>01:00 AM-02:00 AM</option>
                                        <option>02:00 AM-03:00 AM</option>
                                        <option>03:00 AM-04:00 AM</option>
                                        <option>04:00 AM-05:00 AM</option>
                                        <option>05:00 AM-06:00 AM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Job Modal -->

    <!-- Delete Job Modal -->
    <div class="modal custom-modal fade" id="delete_job" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Job Modal -->
    @endif
    @if(Route::is(['shift-list']))
   <!-- Add Shift Modal -->
            <div id="add_shift" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Shift</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Min Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                  
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Max Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                          
                                        </div>
                                    </div>      
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Min End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                  
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Max End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                          
                                        </div>
                                    </div>  
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Break Time (In Minutes) </label>
                                            <input type="text" class="form-control timepicker">                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control form-switch">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">Recurring Shift</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Repeat Every</label>
                                            <select class="select">
                                                <option value="">1 </option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option  selected value="4">5</option>
                                                <option value="3">6</option>
                                            </select>
                                            <label class="col-form-label">Week(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group wday-box">
                                            <label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
        
                                            <label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">End On <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control form-switch">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">Indefinite</label>
                                        </div>
                                    </div>                              
                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Add Tag </label>
                                            <input type="text" class="form-control">                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Add Note </label>
                                            <textarea class="form-control"></textarea>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Shift Modal -->

            <!-- Edit Shift Modal -->
            <div id="edit_shift" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Shift</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Shift Name <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Min Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                  
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Max Start Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                          
                                        </div>
                                    </div>      
                                    <div class="col-md-4">
                                        <div class="form-group" >
                                            <label>Min End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                  
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Max End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>                                          
                                        </div>
                                    </div>  
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Break Time (In Minutes) </label>
                                            <input type="text" class="form-control timepicker">                                         
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control form-switch">
                                            <input type="checkbox" class="form-check-input" id="customCheck3">
                                            <label class="form-check-label" for="customCheck3">Recurring Shift</label>
                                            </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Repeat Every</label>
                                            <select class="select">
                                                <option value="">1 </option>
                                                <option value="1">2</option>
                                                <option value="2">3</option>
                                                <option value="3">4</option>
                                                <option  selected value="4">5</option>
                                                <option value="3">6</option>
                                            </select>
                                            <label class="col-form-label">Week(s)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group wday-box">
                                            <label class="checkbox-inline"><input type="checkbox" value="monday" class="days recurring" checked=""><span class="checkmark">M</span></label>
        
                                            <label class="checkbox-inline"><input type="checkbox" value="tuesday" class="days recurring" checked=""><span class="checkmark">T</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="wednesday" class="days recurring" checked=""><span class="checkmark">W</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="thursday" class="days recurring" checked=""><span class="checkmark">T</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="friday" class="days recurring" checked=""><span class="checkmark">F</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="saturday" class="days recurring"><span class="checkmark">S</span></label>
                                        
                                            <label class="checkbox-inline"><input type="checkbox" value="sunday" class="days recurring"><span class="checkmark">S</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">End On <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="custom-control form-switch">
                                            <input type="checkbox" class="form-check-input" id="customCheck4">
                                            <label class="form-check-label" for="customCheck4">Indefinite</label>
                                            </div>
                                    </div>                              
                            
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Add Tag </label>
                                            <input type="text" class="form-control">                                            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Add Note </label>
                                            <textarea class="form-control"></textarea>                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Edit Shift Modal -->

            <!-- Add Schedule Modal -->
            <div id="add_schedule" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Schedule</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option value="">Select</option>
                                                <option value="">Development</option>
                                                <option value="1">Finance</option>
                                                <option value="2">Finance and Management</option>
                                                <option value="3">Hr & Finance</option>
                                                <option value="4">ITech</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option value="">Select </option>
                                                <option value="1">Richard Miles </option>
                                                <option value="2">John Smith</option>
                                                <option value="3">Mike Litorus </option>
                                                <option value="4">Wilmer Deluna</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Date</label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Shifts <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option value="">Select </option>
                                                <option value="1">10'o clock Shift</option>
                                                <option value="2">10:30 shift</option>
                                                <option value="3">Daily Shift </option>
                                                <option value="4">New Shift</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">End Time   <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
                                            <div class="input-group time">
                                                <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
                                            <input class="form-control timepicker" type="text">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Accept Extra Hours </label>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="form-check-input" id="customSwitch1" checked="">
                                                <label class="form-check-label" for="customSwitch1"></label>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-form-label">Publish </label>
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="form-check-input" id="customSwitch2" checked="">
                                                <label class="form-check-label" for="customSwitch2"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="submit-section">
                                    <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn btn-primary submit-btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Add Schedule Modal -->
                    
            <!-- Delete Shift Modal -->
            <div class="modal custom-modal fade" id="delete_employee" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-header">
                                <h3>Delete Shift</h3>
                                <p>Are you sure want to delete?</p>
                            </div>
                            <div class="modal-btn delete-action">
                                <div class="row">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Delete Employee Modal -->
    @endif        
    @if(Route::is(['shift-scheduling']))
    <!-- Add Schedule Modal -->
                <div id="add_schedule" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Schedule</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select</option>
                                                    <option value="">Development</option>
                                                    <option value="1">Finance</option>
                                                    <option value="2">Finance and Management</option>
                                                    <option value="3">Hr & Finance</option>
                                                    <option value="4">ITech</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select </option>
                                                    <option value="1">Richard Miles </option>
                                                    <option value="2">John Smith</option>
                                                    <option value="3">Mike Litorus </option>
                                                    <option value="4">Wilmer Deluna</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Date</label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Shifts <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select </option>
                                                    <option value="1">10'o clock Shift</option>
                                                    <option value="2">10:30 shift</option>
                                                    <option value="3">Daily Shift </option>
                                                    <option value="4">New Shift</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">End Time   <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
                                                <div class="input-group time">
                                                    <input class="form-control timepicker"><span class="input-group-text"><i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Accept Extra Hours </label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="form-check-input" id="customSwitch1" checked="">
                                                    <label class="form-check-label" for="customSwitch1"></label>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Publish </label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="form-check-input" id="customSwitch2" checked="">
                                                    <label class="form-check-label" for="customSwitch2"></label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Schedule Modal -->
                
                <!-- Edit Schedule Modal -->
                <div id="edit_schedule" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Schedule</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Department <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select</option>
                                                    <option selected value="">Development</option>
                                                    <option value="1">Finance</option>
                                                    <option value="2">Finance and Management</option>
                                                    <option value="3">Hr & Finance</option>
                                                    <option value="4">ITech</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Employee Name <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select </option>
                                                    <option selected value="1">Richard Miles </option>
                                                    <option value="2">John Smith</option>
                                                    <option value="3">Mike Litorus </option>
                                                    <option value="4">Wilmer Deluna</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">Shifts <span class="text-danger">*</span></label>
                                                <select class="select">
                                                    <option value="">Select </option>
                                                    <option value="1">10'o clock Shift</option>
                                                    <option value="2">10:30 shift</option>
                                                    <option value="3">Daily Shift </option>
                                                    <option  selected value="4">New Shift</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Min Start Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="06:11 am">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Start Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="06:30 am">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Max Start Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="08:12 am">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Min End Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="09:12 pm">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">End Time   <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="09:30 pm">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Max End Time <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="09:45 pm">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="col-form-label">Break Time  <span class="text-danger">*</span></label>
                                                <input class="form-control timepicker" type="text" value="45">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control form-switch">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">Recurring Shift</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Repeat Every</label>
                                                <select class="select">
                                                    <option value="">1 </option>
                                                    <option value="1">2</option>
                                                    <option value="2">3</option>
                                                    <option value="3">4</option>
                                                    <option  selected value="4">5</option>
                                                    <option value="3">6</option>
                                                </select>
                                                <label class="col-form-label">Week(s)</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group wday-box">
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="monday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">M</span></label>
                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="tuesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">T</span></label>
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="wednesday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">W</span></label>
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="thursday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">T</span></label>
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="friday" class="days recurring" checked="" onclick="return false;"><span class="checkmark">F</span></label>
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="saturday" class="days recurring" onclick="return false;"><span class="checkmark">S</span></label>
                                                
                                                    <label class="checkbox-inline"><input type="checkbox" name="week_days[]" value="sunday" class="days recurring" onclick="return false;"><span class="checkmark">S</span></label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="col-form-label">End On <span class="text-danger">*</span></label>
                                                <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="custom-control form-switch">
                                                <input type="checkbox" class="form-check-input" id="customCheck2">
                                                <label class="form-check-label" for="customCheck2">Indefinite</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Accept Extra Hours </label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="form-check-input" id="customSwitch3" checked="">
                                                    <label class="form-check-label" for="customSwitch3"></label>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-form-label">Publish </label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="form-check-input" id="customSwitch4" checked="">
                                                    <label class="form-check-label" for="customSwitch4"></label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="submit-section">
                                        <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        <button class="btn btn-primary submit-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Edit Schedule Modal -->
    @endif
    @if(Route::is(['sub-category']))
    <!-- Add Modal -->
    <div class="modal custom-modal fade" id="add_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Sub Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Categories Name <span class="text-danger">*</span></label>
                            <select class="form-control select">
                                <option>Select</option>
                                <option>Hardware</option>
                                <option>Material</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub Categories Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Modal -->

    <!-- Edit Modal -->
    <div class="modal custom-modal fade" id="edit_categories" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Categories</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Categories Name <span class="text-danger">*</span></label>
                            <select class="form-control select">
                                <option>Select</option>
                                <option>Hardware</option>
                                <option>Material</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Sub Categories Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Modal -->

    <!-- Delete Holiday Modal -->
    <div class="modal custom-modal fade" id="delete" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete </h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Holiday Modal --> 
    @endif
    @if(Route::is(['subscribed-companies']))
    <!-- Upgrade Plan Modal -->
    <div class="modal custom-modal fade" id="upgrade_plan" role="dialog">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="fa fa-close"></i></button>
                <div class="modal-body">
                    <h5 class="modal-title text-center mb-3">Upgrade Plan</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Plan Name</label>
                                    <input type="text" placeholder="Free Trial" class="form-control" value="Free Trial">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Amount</label>
                                    <input type="text" class="form-control" value="$500">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Plan Type</label>
                                    <select class="select"> 
                                        <option> Monthly </option>
                                        <option> Yearly </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Users</label>
                                    <select class="select"> 
                                        <option> 5 Users </option>
                                        <option> 50 Users </option>
                                        <option> Unlimited </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Projects</label>
                                    <select class="select"> 
                                        <option> 5 Projects </option>
                                        <option> 50 Projects </option>
                                        <option> Unlimited </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Storage Space</label>
                                    <select class="select"> 
                                        <option> 5 GB </option>
                                        <option> 100 GB </option>
                                        <option> 500 GB </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Plan Description</label>
                            <textarea class="form-control" rows="4" cols="30"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Status</label>
                            <div class="status-toggle">
                                <input type="checkbox" id="upgrade_plan_status" class="check">
                                <label for="upgrade_plan_status" class="checktoggle">checkbox</label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Upgrade Plan Modal -->
    @endif
    @if(Route::is(['taxes']))
    <!-- Add Tax Modal -->
    <div id="add_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Tax</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Pending</option>
                                <option>Approved</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Tax Modal -->
    
    <!-- Edit Tax Modal -->
    <div id="edit_tax" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Tax</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Tax Name <span class="text-danger">*</span></label>
                            <input class="form-control" value="VAT" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tax Percentage (%)  <span class="text-danger">*</span></label>
                            <input class="form-control" value="14%" type="text">
                        </div>
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Tax Modal -->
    
    <!-- Delete Tax Modal -->
    <div class="modal custom-modal fade" id="delete_tax" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Tax</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Tax Modal -->
    @endif
    @if(Route::is(['termination']))
    <!-- Add Termination Modal -->
    <div id="add_termination" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Termination</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Terminated Employee <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Termination Type <span class="text-danger">*</span></label>
                            <div class="add-group-btn">
                                <select class="select">
                                    <option>Misconduct</option>
                                    <option>Others</option>
                                </select>
                                <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Termination Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Notice Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Termination Modal -->
    
    <!-- Edit Termination Modal -->
    <div id="edit_termination" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Termination</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Terminated Employee <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Termination Type <span class="text-danger">*</span></label>
                            <div class="add-group-btn">
                                <select class="select">
                                    <option>Misconduct</option>
                                    <option>Others</option>
                                </select>
                                <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Add</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Termination Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" value="28/02/2019">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reason <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Notice Date <span class="text-danger">*</span></label>
                            <div class="cal-icon">
                                <input type="text" class="form-control datetimepicker" value="28/02/2019">
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Termination Modal -->
    
    <!-- Delete Termination Modal -->
    <div class="modal custom-modal fade" id="delete_termination" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Termination</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Termination Modal -->
    @endif
    @if(Route::is(['ticket-view'.'tickets']))
    <!-- Edit Ticket Modal -->
    <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Ticket</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ticket Subject</label>
                                    <input class="form-control" type="text" value="Laptop Issue">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ticket Id</label>
                                    <input class="form-control" type="text" readonly value="TKT-0001">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Assign Staff</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Mike Litorus</option>
                                        <option>John Smith</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option >Delta Infotech</option>
                                        <option selected>International Software Inc</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option selected>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>CC</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Assign</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ticket Assignee</label>
                                    <div class="project-members">
                                        <a title="John Smith" data-bs-toggle="tooltip" href="#" >
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Add Followers</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ticket Followers</label>
                                    <div class="project-members">
                                        <a title="Richard Miles" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </a>
                                        <a title="John Smith" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                        <a title="Mike Litorus" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="">
                                        </a>
                                        <a title="Wilmer Deluna" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Files</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Ticket Modal -->
    
    <!-- Delete Ticket Modal -->
    <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Ticket</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Ticket Modal -->
    <!-- Assignee Modal -->
    <div id="assignee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign to this task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to add" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Richard Miles</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">John Smith</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Assign</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Assignee Modal -->
    
    <!-- Task Followers Modal -->
    <div id="task_followers" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add followers to this task</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to add" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Jeffery Lalor</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Catherine Manseau</div>
                                            <span class="designation">Android Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar flex-shrink-0">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="">
                                        </span>
                                        <div class="media-body media-middle text-nowrap flex-grow-1">
                                            <div class="user-name">Wilmer Deluna</div>
                                            <span class="designation">Team Leader</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Add to Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Task Followers Modal -->
    @endif
    @if(Route::is(['tickets']))
    <!-- Add Ticket Modal -->
    <div id="add_ticket" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Ticket</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Subject</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Id</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Assign Staff</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option>Mike Litorus</option>
                                        <option>John Smith</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option>Delta Infotech</option>
                                        <option>International Software Inc</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>CC</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Assign</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Assignee</label>
                                    <div class="project-members">
                                        <a title="John Smith" data-placement="top" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Followers</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Followers</label>
                                    <div class="project-members">
                                        <a title="Richard Miles" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </a>
                                        <a title="John Smith" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                        <a title="Mike Litorus" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="">
                                        </a>
                                        <a title="Wilmer Deluna" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Files</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Ticket Modal -->
    
    <!-- Edit Ticket Modal -->
    <div id="edit_ticket" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Ticket</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Subject</label>
                                    <input class="form-control" type="text" value="Laptop Issue">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Id</label>
                                    <input class="form-control" type="text" readonly value="TKT-0001">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Assign Staff</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option selected>Mike Litorus</option>
                                        <option>John Smith</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Client</label>
                                    <select class="select">
                                        <option>-</option>
                                        <option >Delta Infotech</option>
                                        <option selected>International Software Inc</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option selected>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>CC</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Assign</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Assignee</label>
                                    <div class="project-members">
                                        <a title="John Smith" data-placement="top" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Add Followers</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ticket Followers</label>
                                    <div class="project-members">
                                        <a title="Richard Miles" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-09.jpg')}}" alt="">
                                        </a>
                                        <a title="John Smith" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-10.jpg')}}" alt="">
                                        </a>
                                        <a title="Mike Litorus" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg')}}" alt="">
                                        </a>
                                        <a title="Wilmer Deluna" data-bs-toggle="tooltip" href="#" class="avatar">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-11.jpg')}}" alt="">
                                        </a>
                                        <span class="all-team">+2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Upload Files</label>
                                    <input class="form-control" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Ticket Modal -->
    
    <!-- Delete Ticket Modal -->
    <div class="modal custom-modal fade" id="delete_ticket" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Ticket</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Ticket Modal -->
    @endif
    @if(Route::is(['timesheet']))
    <!-- Add Today Work Modal -->
    <div id="add_todaywork" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Today Work details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Project <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Office Management</option>
                                    <option>Project Management</option>
                                    <option>Video Calling App</option>
                                    <option>Hospital Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>Deadline <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control" type="text" value="5 May 2019" readonly>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Total Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="100" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Remaining Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="60" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control"></textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Today Work Modal -->
    
    <!-- Edit Today Work Modal -->
    <div id="edit_todaywork" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Work Details</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Project <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Office Management</option>
                                    <option>Project Management</option>
                                    <option>Video Calling App</option>
                                    <option>Hospital Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <label>Deadline <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control" type="text" value="5 May 2019" readonly>
                                </div>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Total Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="100" readonly>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Remaining Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="60" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Date <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" value="03/03/2019" type="text">
                                </div>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Hours <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="9">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea rows="4" class="form-control">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque.</textarea>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Today Work Modal -->
    
    <!-- Delete Today Work Modal -->
    <div class="modal custom-modal fade" id="delete_workdetail" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Work Details</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Today Work Modal -->
    @endif 
    @if(Route::is(['trainers']))
    <!-- Add Trainers List Modal -->
    <div id="add_trainer" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Trainer</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Role <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Trainers List Modal -->
    
    <!-- Edit Trainers List Modal -->
    <div id="edit_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Trainer</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="John">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Last Name</label>
                                    <input class="form-control" type="text" value="Doe">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Role <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="Web Developer">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email" value="johndoe@example.com">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Phone </label>
                                    <input class="form-control" type="text" value="9876543210">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Trainers List Modal -->
    
    <!-- Delete Trainers List Modal -->
    <div class="modal custom-modal fade" id="delete_type" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Trainers List</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Trainers List Modal -->
    @endif 
    @if(Route::is(['training-type']))
    <!-- Add Training Type Modal -->
    <div id="add_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status</label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Training Type Modal -->
    
    <!-- Edit Training Type Modal -->
    <div id="edit_type" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Type</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Type <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" value="Node Training">
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Status</label>
                            <select class="select">
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Training Type Modal -->
    
    <!-- Delete Training Type Modal -->
    <div class="modal custom-modal fade" id="delete_type" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Training Type</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Training Type Modal -->
    @endif
    @if(Route::is(['training']))
    <!-- Add Training List Modal -->
    <div id="add_training" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Training</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Training Type</label>
                                    <select class="select">
                                        <option>Node Training</option>
                                        <option>Swift Training</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Trainer</label>
                                    <select class="select">
                                        <option>Mike Litorus </option>
                                        <option>John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employees</label>
                                    <select class="select">
                                        <option>Bernardo Galaviz</option>
                                        <option>Jeffrey Warden</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Training List Modal -->
    
    <!-- Edit Training List Modal -->
    <div id="edit_training" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Training List</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Training Type</label>
                                    <select class="select">
                                        <option selected>Node Training</option>
                                        <option>Swift Training</option>
                                        <option>Git Training</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Trainer</label>
                                    <select class="select">
                                        <option>Mike Litorus </option>
                                        <option selected>John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Employees</label>
                                    <select class="select">
                                        <option>Bernardo Galaviz</option>
                                        <option selected>Jeffrey Warden</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-form-label">Training Cost <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" value="$400">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Start Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="07-08-2019" type="text"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>End Date <span class="text-danger">*</span></label>
                                    <div class="cal-icon"><input class="form-control datetimepicker" value="10-08-2019" type="text"></div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Description <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="4">Lorem ipsum ismap</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="col-form-label">Status</label>
                                    <select class="select">
                                        <option selected>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Training List Modal -->
    
    <!-- Delete Training List Modal -->
    <div class="modal custom-modal fade" id="delete_training" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Training List</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete Training List Modal -->
    @endif
    @if(Route::is(['users']))
    <!-- Add User Modal -->
    <div id="add_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select">
                                        <option>Admin</option>
                                        <option>Client</option>
                                        <option>Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label>Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control floating">
                                </div>
                           </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Employee</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Holidays</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leaves</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Events</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add User Modal -->
    
    <!-- Edit User Modal -->
    <div id="edit_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input class="form-control" value="John" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" value="Doe" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Username <span class="text-danger">*</span></label>
                                    <input class="form-control" value="johndoe" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control" value="johndoe@example.com" type="email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Phone </label>
                                    <input class="form-control" value="9876543210" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="select">
                                        <option>Admin</option>
                                        <option>Client</option>
                                        <option selected>Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Company</label>
                                    <select class="select">
                                        <option>Global Technologies</option>
                                        <option>Delta Infotech</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">  
                                <div class="form-group">
                                    <label>Employee ID <span class="text-danger">*</span></label>
                                    <input type="text" value="FT-0001" class="form-control floating">
                                </div>
                           </div>
                        </div>
                        <div class="table-responsive m-t-15">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Employee</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Holidays</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leaves</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Events</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary cancel-btn" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            <button class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit User Modal -->
    
    <!-- Delete User Modal -->
    <div class="modal custom-modal fade" id="delete_user" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete User</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Delete User Modal -->
    @endif
    @if(Route::is(['video-call']))
    <!-- Dragfiles Modal -->
    <div id="drag_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Drag and drop files upload</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="js-upload-form">
                        <div class="upload-drop-zone" id="drop-zone">
                            <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                        </div>
                        <h4>Uploading</h4>
                        <ul class="upload-list">
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        photo.png
                                    </div>
                                    <div class="file-size">1.07 gb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-file"></i>
                                        task.doc
                                    </div>
                                    <div class="file-size">5.8 kb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        dashboard.png
                                    </div>
                                    <div class="file-size">2.1 mb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">Completed</div>
                            </li>
                        </ul>
                    </form>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Dragfiles Modal -->
    
    <!-- Add Group Modal -->
    <div id="add_group" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a group</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                    <form>
                    <div class="form-group">
                        <label>Group Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Group Modal -->
    
    <!-- Add Chat User Modal -->
    <div id="add_chat_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Direct Chat</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to start a chat" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <h5>Recent Conversations</h5>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></span>
                                    <div class="media-body align-self-center text-nowrap flex-grow-1">
                                        <div class="user-name">Jeffery Lalor</div>
                                        <span class="designation">Team Leader</span>
                                    </div>
                                    <div class="text-nowrap align-self-center">
                                        <div class="online-date">1 day ago</div>
                                    </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap flex-grow-1">
                                            <div class="user-name">Bernardo Galaviz</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">3 days ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center flex-shrink-0">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                        </span>
                                        <div class="media-body text-nowrap align-self-center flex-grow-1">
                                            <div class="user-name">John Doe</div>
                                            <span class="designation">Web Designer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">7 months ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Chat User Modal -->
    
    <!-- Share Files Modal -->
    <div id="share_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="files-share-list">
                        <div class="files-cont">
                            <div class="file-type">
                                <span class="files-icon"><i class="far fa-file-pdf"></i></span>
                            </div>
                            <div class="files-info">
                                <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Share With</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share Files Modal -->
    @endif
    @if(Route::is(['voice-call']))
    <!-- Dragfiles Modal -->
    <div id="drag_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Drag and drop files upload</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="js-upload-form">
                        <div class="upload-drop-zone" id="drop-zone">
                            <i class="fa fa-cloud-upload fa-2x"></i> <span class="upload-text">Just drag and drop files here</span>
                        </div>
                        <h4>Uploading</h4>
                        <ul class="upload-list">
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        photo.png
                                    </div>
                                    <div class="file-size">1.07 gb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-file"></i>
                                        task.doc
                                    </div>
                                    <div class="file-size">5.8 kb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">37% done</div>
                            </li>
                            <li class="file-list">
                                <div class="upload-wrap">
                                    <div class="file-name">
                                        <i class="fa fa-photo"></i>
                                        dashboard.png
                                    </div>
                                    <div class="file-size">2.1 mb</div>
                                    <button type="button" class="file-close">
                                        <i class="fa fa-close"></i>
                                    </button>
                                </div>
                                <div class="progress progress-xs progress-striped">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                                </div>
                                <div class="upload-process">Completed</div>
                            </li>
                        </ul>
                    </form>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Dragfiles Modal -->
    
    <!-- Add Group Modal -->
    <div id="add_group" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a group</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Groups are where your team communicates. They’re best when organized around a topic — #leads, for example.</p>
                    <form>
                    <div class="form-group">
                        <label>Group Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Send invites to: <span class="text-muted-light">(optional)</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Group Modal -->
    
    <!-- Add Chat User Modal -->
    <div id="add_chat_user" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Direct Chat</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group m-b-30">
                        <input placeholder="Search to start a chat" class="form-control search-input" type="text">
                            <button class="btn btn-primary">Search</button>
                    </div>
                    <div>
                        <h5>Recent Conversations</h5>
                        <ul class="chat-user-list">
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-16.jpg')}}"></span>
                                    <div class="media-body align-self-center text-nowrap">
                                        <div class="user-name">Jeffery Lalor</div>
                                        <span class="designation">Team Leader</span>
                                    </div>
                                    <div class="text-nowrap align-self-center">
                                        <div class="online-date">1 day ago</div>
                                    </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center"><img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-13.jpg')}}"></span>
                                        <div class="media-body align-self-center text-nowrap">
                                            <div class="user-name">Bernardo Galaviz</div>
                                            <span class="designation">Web Developer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">3 days ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="media d-flex">
                                        <span class="avatar align-self-center">
                                            <img alt="" src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg')}}">
                                        </span>
                                        <div class="media-body text-nowrap align-self-center">
                                            <div class="user-name">John Doe</div>
                                            <span class="designation">Web Designer</span>
                                        </div>
                                        <div class="align-self-center text-nowrap">
                                            <div class="online-date">7 months ago</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Chat User Modal -->
    
    <!-- Share Files Modal -->
    <div id="share_files" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Share File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="files-share-list">
                        <div class="files-cont">
                            <div class="file-type">
                                <span class="files-icon"><i class="far fa-file-pdf"></i></span>
                            </div>
                            <div class="files-info">
                                <span class="file-name text-ellipsis">AHA Selfcare Mobile Application Test-Cases.xls</span>
                                <span class="file-author"><a href="#">Bernardo Galaviz</a></span> <span class="file-date">May 31st at 6:53 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Share With</label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Share</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Share Files Modal -->
    @endif
                    