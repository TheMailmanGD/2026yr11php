<?php
include_once "indexHeader.php";
?>
<h1>CRUD Read</h1>
<?php
$query1 = "SELECT * FROM users WHERE status = '1'";
//echo('<br>' . $query1 . '<br>');
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
$conn->close();

//var_dump($result);

if ($result){

}
?>
<?php
include_once "indexFooter.php";
?>