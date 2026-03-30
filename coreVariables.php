<?php
include_once "indexHeader.php";
include_once "indexMenubar.php";
include_once "container_start.php";
?>

<h1>Variables</h1>
<!-- how to write html inside php -->
 <?php
 echo ("<h3>this is how you write HTML inside PHP tag</h3>");
 $hello = "Hello World";
 print("$hello"); //both using quotes and not using quotes work
 $x = 5;
 echo ("<br>The square of $x is" . $x**);
 ?>

<?php
include_once "container_end.php";
include_once "indexFooter.php";
?>