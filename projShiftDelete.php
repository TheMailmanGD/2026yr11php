<?php
include_once "indexHeader.php";
?>
<?php
$id = (int)$_GET['id'];

$stmt = $conn->prepare("UPDATE shifts SET status = 0 WHERE id = ?");
if ($stmt) {
	$stmt->bind_param('i', $id);
	if ($stmt->execute()) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $stmt->error;
	}
} else {
	echo "Prepare failed: " . $conn->error;
}
include_once "indexFooter.php";
?>