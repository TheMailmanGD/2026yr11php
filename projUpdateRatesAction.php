<?php
include_once "indexHeader.php";
$sql = "UPDATE rates2 SET rate='{$_POST['update_rates_rate']}', laundry='{$_POST['update_rates_laundry_allow']}', uniform='{$_POST['update_rates_uniform_allow']}', pm_allow='{$_POST['update_rates_pm_allow']}', fringe='{$_POST['update_rates_fringe']}', tax='{$_POST['update_rates_tax']}', deductions='{$_POST['update_rates_deductions']}', extra_income='{$_POST['update_rates_extra_income']}', start_time='{$_POST['update_rates_start_time']}', end_time='{$_POST['update_rates_end_time']}', break_mins='{$_POST['update_rates_break_mins']}' WHERE user_code = '".$_SESSION["session_user_code"]."'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: projCreatePayslip.php");
include_once "indexFooter.php";
?>