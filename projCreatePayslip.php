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
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_rate"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">PM Allow</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_pm_allow"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">UNI Allow</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_uniform"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">LAU Allow</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_laundry"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Fringe</label></label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_fringe"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Tax</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_tax"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Deduct</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_deductions"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">E_Income</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_extra_income"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Start Time</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_start_time"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">End Time</label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_end_time"] ?>">
                        </div>
                    </div>
                    <div class="row mb-0">
                    <label class="col-sm-6 col-form-label">Break Mins</label></label>
                        <div class="col-sm-6">
                            <input type="number" disabled class="form-control form-control-sm"
                            value="<?php echo $_SESSION["session_break_mins"] ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Save
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
                    <button class="btn btn-warning">
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
                                            <a href="projShiftEdit.php?id='.$row['id'].'">
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
<?php
include_once "indexFooter.php";
?>