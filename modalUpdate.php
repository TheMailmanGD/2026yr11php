<?php
include_once "indexHeader.php";
?>
<?php
$id = $conn->real_escape_string($_POST['id']);
$first_name = $conn->real_escape_string($_POST['first_name']);
$last_name = $conn->real_escape_string($_POST['last_name']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "UPDATE users SET first_name= '$first_name', last_name= '$last_name', email= '$email' WHERE id= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
?>
<?php
include_once "indexFooter.php";
?>