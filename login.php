<?php
include_once "connect.php";
include_once "indexHeader.php";
?>
<?php
$sql = mysqli_query($conn, "SELECT code FROM users WHERE code = '{$_POST['loginID']}'");
if(mysqli_num_rows($sql) > 0)
{
    echo("Successfully logged in!");
}
else
{
    if(mysqli_num_rows($sql) == 0)
    {
        echo "Login ID not found";
    }
}

?>