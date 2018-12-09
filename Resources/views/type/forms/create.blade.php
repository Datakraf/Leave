<h4>Create Leave</h4>
<form action="">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="" class="form-label">{{ucwords(__('leave::leave.leave-name'))}}</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col">
            <label for="" class="form-label">{{ucwords(__('leave::leave.max-leave-per-year'))}}</label>
            <input type="text" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary pull-right">
            Submit
        </button>
    </div>
</form>
