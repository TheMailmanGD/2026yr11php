<?php 
session_start();
$code = htmlspecialchars($_POST['code']);
$pass_db = htmlspecialchars($_POST['pass_db']);
$pass = htmlspecialchars($_POST['pass']);
if ($pass_db == $pass) {
    $_SESSION["session_logged"] = "loggedin";
    $_SESSION["session_user_code"] = $code;
    header("Location: index.php?msg=Login passed");
    exit;
} else {
    header("Location: index.php?msg=Invalid password");
    exit;
}
?>