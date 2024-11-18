<?php
include 'tri_func.php';

$randomNumbers = array(1500, 4500, 2200, 1500, 3300, 1800, 1700,2000, 4000);

$randomNumbers1 =tri_selection($randomNumbers );
foreach ($randomNumbers1 as $number) {
    echo $number . ' '; }
echo "</br>";
tri_selection_ref($randomNumbers );
foreach ($randomNumbers as $number) {
    echo $number . ' '; }
?>