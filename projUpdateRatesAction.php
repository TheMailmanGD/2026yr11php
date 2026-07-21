<?php
include_once "indexHeader.php";
$sql = "UPDATE rates2 SET rate='{$_POST['rate']}', laundry='{$_POST['laundry_allow']}', uniform='{$_POST['uniform_allow']}', pm_allow='{$_POST['pm_allow']}', fringe='{$_POST['fringe']}', tax='{$_POST['tax']}', deductions='{$_POST['deductions']}', extra_income='{$_POST['extra_income']}', start_time='{$_POST['start_time']}', end_time='{$_POST['end_time']}', break_mins='{$_POST['break_mins']}' WHERE user_code = '".$_SESSION["session_user_code"]."'";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
include_once "indexFooter.php";
?>