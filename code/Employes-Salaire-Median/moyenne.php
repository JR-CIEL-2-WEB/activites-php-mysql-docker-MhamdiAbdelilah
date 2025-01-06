<?php

function moyenne($tab){
    $sum = 0;
    foreach ($tab as $value) {
        $sum += $value;
    }
    return $sum/sizeof($tab);
}



?>