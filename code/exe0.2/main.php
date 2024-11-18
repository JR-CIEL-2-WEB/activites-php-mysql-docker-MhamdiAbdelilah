<?php
include 'statistique.php';
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = 0;

$randomNumbers = array(1500, 4500, 2200, 1500, 3300, 1800, 1700,2000, 4000);
sort($randomNumbers);
foreach ($randomNumbers as $number) {
     echo $number . ' '; }
echo '</br>';

echo 'La moyenne est ' . moyenne($randomNumbers) . ' .</br>' ;

echo 'La mediane est ' . mediane($randomNumbers) . ' .' ;

?>