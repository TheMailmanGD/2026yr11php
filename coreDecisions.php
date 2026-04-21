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
include_once "indexFooter.php";
?>