<?php
include_once "indexHeader.php";
?>
<?php
$sql = "UPDATE shifts SET rate='{$_POST['rate']}', shift_allow='{$_POST['pm_allow']}', uniform='{$_POST['uniform']}', laundry='{$_POST['laundry']}', shift_date='{$_POST['shift_date']}', start_time='{$_POST['start_time']}', end_time='{$_POST['end_time']}', break_minutes='{$_POST['break_mins']}', start_day_holi='{$_POST['start_day_holi']}', end_day_holi='{$_POST['end_day_holi']}' WHERE id={$_POST['id']}";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>
<?php
include_once "indexFooter.php"
?>