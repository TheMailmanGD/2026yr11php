<?php
include_once "indexHeader.php";
?>
<h1>Arrays</h1>
<!-- 1 dimensional array -->
<?php
$array = array("thing1", "thing2", ["listthing1", "listthing2"]);
?>
<!-- 2 dimensional array (e.g. matrices) -->
<?php
$twodimensionalarray = array (
    array("fish", "cool", "amazing"),
    array("celeste", "1", "el dorado"),
    array("thomas", "sellprice", "$-5")
);
echo $twodimensionalarray[0][0]."is ".$twodimensionalarray[0][1]."and ".$twodimensionalarray[0][2];
echo $twodimensionalarray[2][0]."'s ".$twodimensionalarray[2][1]."is ".$twodimensionalarray[2][2];
?>
<!-- foreach loop (made for array specifically) -->
<?php

?>
<!-- while loop with array -->
<?php
include_once "indexFooter.php";
?>