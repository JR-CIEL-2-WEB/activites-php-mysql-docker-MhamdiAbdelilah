<?php 

$servername = "127.0.0.1:3306";
$username = "eleve";
$password = "n>]2y&CM:BB7e%r";
$dbname = "appdb"; 

try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die($e->getMessage());
}
?>