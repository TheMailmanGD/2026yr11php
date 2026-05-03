<?php
include_once "indexHeader.php";
?>
<?php
$sql = "SELECT * FROM users WHERE id={$_POST['id']}";
$result = $conn->query($sql);

echo "<table><tr><th>ID</th><th>Code</th><th>Name</th><th>Email</th><th>Status</th></tr>";
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["code"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["status"] . "</td></tr>";
}
?>
<?php
include_once "indexFooter.php";
?>