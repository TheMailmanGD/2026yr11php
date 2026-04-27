<?php
include_once "indexHeader.php";
?>
<?php
$sql = "DELETE FROM users WHERE id={$_POST['id']}";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>