<?php
include_once "indexHeader.php";
?>
<?php
$startHoliValue = (isset($_POST['edit_shift_start_day_holi']) && $_POST['edit_shift_start_day_holi'] === '1') ? '1' : '0';
$endHoliValue = (isset($_POST['edit_shift_end_day_holi']) && $_POST['edit_shift_end_day_holi'] === '1') ? '1' : '0';

$sql = "UPDATE shifts SET rate='{$_POST['edit_shift_rate']}', shift_allow='{$_POST['edit_shift_pm_allow']}', uniform='{$_POST['edit_shift_uniform']}', laundry='{$_POST['edit_shift_laundry']}', shift_date='{$_POST['edit_shift_shift_date']}', start_time='{$_POST['edit_shift_start_time']}', end_time='{$_POST['edit_shift_end_time']}', break_minutes='{$_POST['edit_shift_break_mins']}', start_day_holi='{$startHoliValue}', end_day_holi='{$endHoliValue}' WHERE id={$_POST['edit_shift_id']}";
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

header("Location: projCreatePayslip.php");
?>
<?php
include_once "indexFooter.php"
?>