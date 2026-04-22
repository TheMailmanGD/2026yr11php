<?php
include_once "indexHeader.php";
?>
<h1>Decisions</h1>
<!-- if elseif else -->
<?php
//if
$x = "cheese";
if ($x == "cheese") {
    echo("this should show");
}
if ($x == "fish") {
    echo("this should not show");
}
//elseif
$x = 25;
if ($x < 20) {
    echo("this should not show");
}
elseif ($x > 20 and $x < 24) {
    echo("this should not show");
}
else {
    echo("this should show");
}
?>

<!-- switch case -->
<?php
$y = "3";

switch ($y) {
  case "1":
    echo "1";
    break;
  case "2":
    echo "2";
    break;
  case "3":
    echo "3";
    break;
  default:
    echo "this number is not 1, 2 or 3";
}
?>
<?php
include_once "indexFooter.php";
?>