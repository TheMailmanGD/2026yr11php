<?php
include_once "indexHeader.php";
?>

<h1>Iterations</h1>

<!-- for loop -->
<?php
//definition -> condition -> increment
for ($i = 0; $i <= 10; $i++) {
  echo ($i);
}
?>
<!-- while do loop -->
<?php
$i = 1;
while ($i <= 10) {
    $i++; 
    echo i;
}
?>

<!-- do while loop -->
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 10);
?>
<?php
include_once "indexFooter.php";
?>