<?php
function moyenne($tab){
    $sum = 0;
    foreach ($tab as $value) {
        $sum += $value;
    }
    return $sum/sizeof($tab);
}

function mediane($tab){
    $s = sizeof($tab);
    if ($s % 2 != 0) {
        return $tab[($s-1)/2];
    }
    else {
        return($tab[sizeof($tab)/2]+$tab[sizeof($tab)/2 -1])/2;
    }
}
?>