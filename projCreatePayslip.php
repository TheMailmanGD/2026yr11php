<?php
include_once "indexHeader.php";
?>

<?php
//echo  ($_SESSION["session_user_code"]);
$query1 = "SELECT * FROM rates2 where user_code = '".$_SESSION["session_user_code"]."'";
//echo ($query1);
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
//print_r ($result);
$conn->close();
$row = mysqli_fetch_array($result);
//print_r ($row);
$id = $row['id'];
$_SESSION["session_rate"] = $row['rate'];
$_SESSION["session_laundry"] = $row['laundry'];
$_SESSION["session_uniform"] = $row['uniform'];
$_SESSION["session_pm_allow"] = $row['pm_allow'];
$_SESSION["session_fringe"] = $row['fringe'];
$_SESSION["session_tax"] = $row['tax'];
$_SESSION["session_deductions"] = $row['deductions'];
$_SESSION["session_extra_income"] = $row['extra_income'];
$_SESSION["session_start_time"] = $row['start_time'];
$_SESSION["session_end_time"] = $row['end_time'];
$_SESSION["session_break_mins"] = $row['break_mins'];
?>

<h1>Enter Shifts</h1>
    <div class="container-fluid">
        <div class="d-flex">
            <!-- Left 20% -->
            <div style="width:20%;" class="border-end pe-3">
                <form method="post" action="" class="w-100">
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Rate</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_rate"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">PM Allow</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_pm_allow"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">UNI Allow</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_uniform"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">LAU Allow</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_laundry"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Fringe</label></label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_fringe"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Tax</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_tax"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Deduct</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_deductions"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">E_Income</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_extra_income"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Start Time</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_start_time"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">End Time</label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_end_time"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Break Mins</label></label>
                        <div class="col-sm-6">
                            <input type="text" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_break_mins"] ?>">
                        </div>
                    </div>

                    <button
                    type="button"
                    class="btn btn-primary btnUpdateRates"
                    data-bs-toggle="modal"
                    data-bs-target="#update_rates_modal"
                    data-id="'.$row['id'].'"
                    >
                    UPDATE RATES
                </button>
            </form>
        </div>
        <!-- Right 80% -->
        <div style="width:80%;" class="ps-3">
            <!-- Buttons row -->
            <div class="d-flex justify-content-between mb-3">
                <button class="btn btn-success">
                    Generate Slip
                </button>
                <!--
                <img src="data:image/jpeg;base64,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">
                -->
                <button 
                    type="button" 
                    class="btn btn-warning btnAddShift" 
                    data-bs-toggle="modal" 
                    data-bs-target="#add_shift_modal"
                    data-id="'.$row['id'].'"
                    >
                    Add Shift
                </button>
            </div>

            <?php
            $query1 = "SELECT * FROM shifts WHERE status=1 and user_code='".$_SESSION["session_user_code"] . "'";
            //echo ($query1);
            $conn = new mysqli($host, $user, $pass, $db);
            $result = mysqli_query($conn, $query1);
            //var_dump ($result);
            $conn->close();
            //var_dump($result); // very useful for debugging
            $output = "";
            if($result){ // querry runs
            if(mysqli_num_rows($result) > 0){
                $output .= '<table class="table table-bordered table-sm">';
                    $output .=  '<thead class="table-light">
                        <tr>
                        <th>Date</th>
                        <th>S_T</th>
                        <th>E_T</th>
                        <th>B_M</th>
                        <th>Rate</th>
                        <th>L_A</th>
                        <th>U_A</th>
                        <th>S_A</th>
                        <th>S_H</th>
                        <th>E_H</th>
                        <th>Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
                        while($row = mysqli_fetch_array($result)){
                            $output .=  '<tr>
                            <td>'. $row["shift_date"] .'</td>
                            <td>'. $row["start_time"] .'</td>
                            <td>'. $row["end_time"] .'</td>
                            <td>'. $row["break_minutes"] .'</td>
                            <td>'. $row["rate"] .'</td>
                            <td>'. $row["laundry"] .'</td>
                            <td>'. $row["uniform"] .'</td>
                            <td>'. $row["shift_allow"] .'</td>
                            <td>'. $row["start_day_holi"] .'</td>
                            <td>'. $row["end_day_holi"] .'</td>
                                <td>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#"
                                            class="btn-edit-shift"
                                            data-id="'. $row['id'] .'"
                                            data-shift-date="'. htmlspecialchars($row['shift_date'], ENT_QUOTES, 'UTF-8') .'"
                                            data-start-time="'. htmlspecialchars($row['start_time'], ENT_QUOTES, 'UTF-8') .'"
                                            data-end-time="'. htmlspecialchars($row['end_time'], ENT_QUOTES, 'UTF-8') .'"
                                            data-break-mins="'. htmlspecialchars($row['break_minutes'], ENT_QUOTES, 'UTF-8') .'"
                                            data-start-holi="'. ($row['start_day_holi'] ? '1' : '0') .'"
                                            data-end-holi="'. ($row['end_day_holi'] ? '1' : '0') .'"
                                            data-rate="'. htmlspecialchars($row['rate'], ENT_QUOTES, 'UTF-8') .'"
                                            data-pm-allow="'. htmlspecialchars($row['shift_allow'], ENT_QUOTES, 'UTF-8') .'"
                                            data-uniform="'. htmlspecialchars($row['uniform'], ENT_QUOTES, 'UTF-8') .'"
                                            data-laundry="'. htmlspecialchars($row['laundry'], ENT_QUOTES, 'UTF-8') .'"
                                            data-bs-toggle="modal" data-bs-target="#shift_edit_modal">
                                            <i class="fas fa-edit text-primary"></i>
                                        </a>
                                        <a href="projShiftDelete.php?id='.$row['id'].'"
                                        onclick="return confirm(\'Delete this record?\');">
                                    <i class="fas fa-trash text-danger"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>';
                    }
                $output .=  "</tbody> </table>";
            } else {
                echo ("No Records found");
            }
        }else {
            echo ("Query returned FALSE");
        }
        echo ($output);
        ?>
    </div>
</div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const editButtons = document.querySelectorAll('.btn-edit-shift');
    const modal = document.getElementById('shift_edit_modal');

    editButtons.forEach(function (button) {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const form = modal.querySelector('form');
            if (!form) {
                return;
            }

            form.querySelector('[name="edit_shift_id"]').value = this.getAttribute('data-id') || '';
            form.querySelector('[name="edit_shift_shift_date"]').value = this.getAttribute('data-shift-date') || '';
            form.querySelector('[name="edit_shift_start_time"]').value = this.getAttribute('data-start-time') || '';
            form.querySelector('[name="edit_shift_end_time"]').value = this.getAttribute('data-end-time') || '';
            form.querySelector('[name="edit_shift_break_mins"]').value = this.getAttribute('data-break-mins') || '';

            const startHoliValue = this.getAttribute('data-start-holi') === '1' ? '1' : '0';
            const endHoliValue = this.getAttribute('data-end-holi') === '1' ? '1' : '0';

            form.querySelector('#edit_shift_start_day_holi').checked = startHoliValue === '1';
            form.querySelector('#edit_shift_end_day_holi').checked = endHoliValue === '1';

            form.querySelector('[name="edit_shift_rate"]').value = this.getAttribute('data-rate') || '';
            form.querySelector('[name="edit_shift_pm_allow"]').value = this.getAttribute('data-pm-allow') || '';
            form.querySelector('[name="edit_shift_uniform"]').value = this.getAttribute('data-uniform') || '';
            form.querySelector('[name="edit_shift_laundry"]').value = this.getAttribute('data-laundry') || '';
        });
    });
});
</script>

<?php
include_once "indexFooter.php";
include_once "projUpdateRatesModal.php";
include_once "projAddShiftModal.php";
include_once "projShiftEditModal.php";
?>