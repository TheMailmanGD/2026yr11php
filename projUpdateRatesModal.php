<div class="modal" id="update_rates_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Rates</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <form action="projUpdateRatesAction.php" method="POST">
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Rate Per Hour</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="rate" id="rate" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_rate"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">PM Shift Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="pm_allow" id="pm_allow" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_pm_allow"] ?>">
                </div>
            </div>
            <?php
            ?>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Uniform Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="uniform_allow" id="uniform_allow" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_uniform"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Laundry Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="1" name="laundry_allow" id="laundry_allow" class="form-control form-control-sm" 
                        value='<?php echo $_SESSION["session_laundry"] ?>'>
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Fringe</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="number" step="0.01" name="fringe" id="fringe" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_fringe"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Tax</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="number" step="0.01" name="tax" id="tax" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_tax"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Deductions</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="deductions" id="deductions" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_deductions"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Extra Income</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="extra_income" id="extra_income" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_extra_income"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Start Time</label>
                <div class="col-sm-7">
                    <input type="time" name="start_time" id="start_time" class="form-control form-control-sm mr-2" 
                        value="<?php echo $_SESSION["session_start_time"] ?>">
                </div>
            </div>
            <?php
            $endTime = date('H:i', strtotime('+8 hours'));
            ?>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">End Time</label>
                <div class="col-sm-7">
                    <input type="time" name="end_time" id="end_time" class="form-control form-control-sm mr-2"
                        value="<?php echo $_SESSION["session_end_time"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Break Mins</label>
                <div class="col-sm-7">
                    <input type="number" step="1" name="break_mins" id="break_mins" class="form-control form-control-sm" 
                        value='<?php echo $_SESSION["session_break_mins"] ?>'>
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary btn-success" value="Update Rates">
        </form>
      </div>
    </div>
  </div>
</div>
