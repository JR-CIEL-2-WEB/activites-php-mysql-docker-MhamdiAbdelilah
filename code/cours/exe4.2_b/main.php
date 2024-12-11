<?php
include 'tri_func.php';
include 'statistique.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $list = $_GET['list'];
    $array = json_decode($list);
    tri_selection_ref($array);
    $mid = mediane($array);

    // Output the median as JSON
    echo json_encode(["median" => $mid]);
} else {
    echo json_encode(["error" => "No data received"]);
}
?>
