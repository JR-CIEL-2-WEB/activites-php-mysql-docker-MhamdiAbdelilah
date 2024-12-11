<?php
include 'statistique.php';
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = 0;
$tab = array($note_maths, $note_francais, $note_histoire_geo);
echo 'La moyenne est ' . moyenne($tab) . ' / 20.' ;

?>