<?php
include_once "indexHeader.php";
?>

<?php
$query1 = "SELECT * FROM rates2 where user_code = '".$_SESSION["session_user_code"]."'";
//echo ($query1);
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
//print_r ($result);
$conn->close();
$row = mysqli_fetch_array($result);
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

            form.querySelector('[name="id"]').value = this.getAttribute('data-id') || '';
            form.querySelector('[name="shift_date"]').value = this.getAttribute('data-shift-date') || '';
            form.querySelector('[name="start_time"]').value = this.getAttribute('data-start-time') || '';
            form.querySelector('[name="end_time"]').value = this.getAttribute('data-end-time') || '';
            form.querySelector('[name="break_mins"]').value = this.getAttribute('data-break-mins') || '';
            form.querySelector('[name="start_day_holi"]').checked = this.getAttribute('data-start-holi') === '1';
            form.querySelector('[name="end_day_holi"]').checked = this.getAttribute('data-end-holi') === '1';
            form.querySelector('[name="rate"]').value = this.getAttribute('data-rate') || '';
            form.querySelector('[name="pm_allow"]').value = this.getAttribute('data-pm-allow') || '';
            form.querySelector('[name="uniform"]').value = this.getAttribute('data-uniform') || '';
            form.querySelector('[name="laundry"]').value = this.getAttribute('data-laundry') || '';
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