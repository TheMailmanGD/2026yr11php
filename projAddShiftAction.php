<?php
include_once "indexHeader.php";
?>
<?php
$sql = "INSERT INTO shifts (id, user_code, rate, shift_allow, uniform, laundry, shift_date, start_time, end_time, break_minutes, start_day_holi, end_day_holi, status) VALUES (NULL, '".$_SESSION["session_user_code"]."', '{$_POST['rate']}', '{$_POST['pm_allow']}', '{$_POST['uniform']}', '{$_POST['laundry']}', '{$_POST['shift_date']}', '{$_POST['start_time']}', '{$_POST['end_time']}', '{$_POST['break_mins']}', '{$_POST['start_day_holi']}', '{$_POST['end_day_holi']}', 1)";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>
