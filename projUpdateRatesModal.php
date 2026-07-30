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
                    <input type="number" step="0.01" name="update_rates_rate" id="update_rates_rate" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_rate"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">PM Shift Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="update_rates_pm_allow" id="update_rates_pm_allow" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_pm_allow"] ?>">
                </div>
            </div>
            <?php
            ?>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Uniform Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="update_rates_uniform_allow" id="update_rates_uniform_allow" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_uniform"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Laundry Allowance</label>
                <div class="col-sm-7">
                    <input type="number" step="1" name="update_rates_laundry_allow" id="update_rates_laundry_allow" class="form-control form-control-sm" 
                        value='<?php echo $_SESSION["session_laundry"] ?>'>
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Fringe</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="number" step="0.01" name="update_rates_fringe" id="update_rates_fringe" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_fringe"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Tax</label>
                <div class="col-sm-7 d-flex align-items-center">
                    <input type="number" step="0.01" name="update_rates_tax" id="update_rates_tax" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_tax"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Deductions</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="update_rates_deductions" id="update_rates_deductions" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_deductions"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Extra Income</label>
                <div class="col-sm-7">
                    <input type="number" step="0.01" name="update_rates_extra_income" id="update_rates_extra_income" class="form-control form-control-sm"
                        value="<?php echo $_SESSION["session_extra_income"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Start Time</label>
                <div class="col-sm-7">
                    <input type="time" name="update_rates_start_time" id="update_rates_start_time" class="form-control form-control-sm mr-2" 
                        value="<?php echo $_SESSION["session_start_time"] ?>">
                </div>
            </div>
            <?php
            $endTime = date('H:i', strtotime('+8 hours'));
            ?>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">End Time</label>
                <div class="col-sm-7">
                    <input type="time" name="update_rates_end_time" id="update_rates_end_time" class="form-control form-control-sm mr-2"
                        value="<?php echo $_SESSION["session_end_time"] ?>">
                </div>
            </div>
            <div class="row mb-0">
                <label class="col-sm-5 col-form-label">Break Mins</label>
                <div class="col-sm-7">
                    <input type="number" step="1" name="update_rates_break_mins" id="update_rates_break_mins" class="form-control form-control-sm" 
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
