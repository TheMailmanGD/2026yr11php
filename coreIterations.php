<?php
include_once "indexHeader.php";
?>

<h1>Iterations</h1>

<!-- for loop -->
<?php
//definition -> condition -> increment
for ($i = 1; $i <= 10; $i++) {
  echo ($i);
}
?>
<!-- while loop -->
<?php
$i = 0;
while ($i < 10) {
    $i++; 
    echo $i;
}
?>

<!-- do while loop -->
<?php
$i = 1;

do {
  echo $i;
  $i++;
} while ($i <= 10);
?>
<?php
include_once "indexFooter.php";
?>