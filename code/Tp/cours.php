<?php

function readCoursFile() {
    $filename = 'cours.json';
    if (file_exists($filename)) {
        $data = file_get_contents($filename);
        return json_decode($data, true); 
    } else {
        return ["error" => "File not found"];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $coursData = readCoursFile();
    $id = $_GET["coursId"];
    $result = ["error" => "Course not found"];

    foreach ($coursData as $course) {
        if ($course['id'] == $id) {
            $result = $course;
            break;
        }
    }

    echo json_encode($result);
} else {
    echo json_encode(["error" => "No data received"]);
}
?>