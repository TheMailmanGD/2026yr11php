<?php
include_once "indexHeader.php";
?>
<?php
$sql = "INSERT INTO shifts (id, user_code, rate, shift_allow, uniform, laundry, shift_date, start_time, end_time, break_minutes, start_day_holi, end_day_holi, status) VALUES (NULL, '".$_SESSION["session_user_code"]."', '{$_POST['add_shift_rate']}', '{$_POST['add_shift_pm_allow']}', '{$_POST['add_shift_uniform']}', '{$_POST['add_shift_laundry']}', '{$_POST['add_shift_shift_date']}', '{$_POST['add_shift_start_time']}', '{$_POST['add_shift_end_time']}', '{$_POST['add_shift_break_mins']}', '{$_POST['add_shift_start_day_holi']}', '{$_POST['add_shift_end_day_holi']}', 1)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: projCreatePayslip.php");
?>
<?php
include_once "indexFooter.php";
?>
