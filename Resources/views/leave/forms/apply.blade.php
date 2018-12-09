<form action="" method="POST">
    <!-- identity -->
    <div class="row">
        <div class="col-4">
            <h4>Leave Information</h4>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.leave-type'))}}</label>
                        <select name="leave_type" id="" class="form-control">
                            <option value="">Hello</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.leave-balance'))}}</label>
                        <input type="text" name="" id="" value="22" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.start-date'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.end-date'))}}</label>
                        <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.notes'))}}</label>
                        <textarea name="" id="" cols="30" rows="6" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">{{ucwords(__('leave::leave.attachment'))}}</label>
                        <button type="button" class="btn btn-block btn-md btn-primary" onclick="document.getElementById('fileInput').click();"><i
                                class="ti ti-files"></i> Attach your file(s) here</button>
                        <input id="fileInput" type="file" style="display:none;" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-primary pull-right" type="submit">
            Apply
        </button>
    </div>
</form>
