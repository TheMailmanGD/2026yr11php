<?php 
include_once "indexHeader.php";
?>
<h1>CRUD Read</h1>     
<!-- Code for Middle Part -->
<?php 
$code = htmlspecialchars($_POST['code']);
echo ("Welcome ". $code);
$query1 = "SELECT * FROM users WHERE code='".$code."' LIMIT 1";
//echo ('<br>' . $query1 . '<br>');
$conn = new mysqli($host, $user, $pass, $db);
$result = mysqli_query($conn, $query1);
$conn->close();
//var_dump($result); // very useful for debugging
$output = "";
if($result){ // querry runs
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $pass = $row["pass"];
        ?>
        <form method="post" action="loginPass.php">
            <input type="hidden" name="code" value="<?php echo ($code); ?>">
            <input type="hidden" name="pass_db" value="<?php echo ($pass); ?>">
            <label>Password:</label>
            <input type="pass" name="pass" required>
            <button type="submit">Submit</button>
        </form>
        <?php
    } else {
        echo ("No Records found for this code");
    }
}else {
    echo ("Query returned FALSE");
}
echo ($output);
?>
<?php 
include_once "indexFooter.php";
?>
