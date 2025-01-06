<?php
function mediane($salaries) {
    $count = count($salaries);
    if ($count == 0) {
        return 0; // No salaries in the table
    }

    sort($salaries);
    $middle = floor(($count - 1) / 2);
    if ($count % 2) {
        $median = $salaries[$middle];
    } else {
        $low = $salaries[$middle];
        $high = $salaries[$middle + 1];
        $median = (($low + $high) / 2);
    }

    return $median;
}
?>