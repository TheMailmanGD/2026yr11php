<div class="modal" id="shift_edit_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Shift</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="projEditShiftAction.php" method="POST">
            <input type="hidden" name="edit_shift_id" id="edit_shift_id">
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Shift Date</label>
                <div class="col-sm-7">
                    <input type="date" name="edit_shift_shift_date" id="edit_shift_shift_date" class="form-control form-control-sm" 
                        value="<?php echo date('Y-m-d'); ?>"
                        max="<?php echo date('Y-m-d', strtotime('next sunday + 7 days')); ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Start Time</label>
                <div class="col-sm-7">
                    <input type="time" name="edit_shift_start_time" id="edit_shift_start_time" class="form-control form-control-sm" 
                        value="<?php echo date('H:i'); ?>">
                </div>
            </div>
            <?php
            $endTime = date('H:i', strtotime('+8 hours 30 minutes'));
            ?>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">End Time</label>
                <div class="col-sm-7">
                    <input type="time" name="edit_shift_end_time" id="edit_shift_end_time" class="form-control form-control-sm" 
                        value="<?php echo $endTime; ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Break Mins</label>
                <div class="col-sm-7">
                    <input type="number" step="1" name="edit_shift_break_mins" id="edit_shift_break_mins" class="form-control form-control-sm" 
                        value='<?php echo $_SESSION["session_break_mins"] ?>'>
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Start Day Holiday</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="checkbox" name="edit_shift_start_day_holi" id="edit_shift_start_day_holi" class="mr-2" value="1">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">End Day Holiday</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="checkbox" name="edit_shift_end_day_holi" id="edit_shift_end_day_holi" class="mr-2" value="1">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Rate per hour</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="edit_shift_rate" id="edit_shift_rate" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_rate"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">PM Shift Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="edit_shift_pm_allow" id="edit_shift_pm_allow" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_pm_allow"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Uniform Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="edit_shift_uniform" id="edit_shift_uniform" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_uniform"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Laundry Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="edit_shift_laundry" id="edit_shift_laundry" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_laundry"] ?>">
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-success" value="Edit Shift">
        </form>
      </div>
    </div>
  </div>
</div>
