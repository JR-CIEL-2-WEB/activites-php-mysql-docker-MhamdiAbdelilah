<?php
$servername = "mysql";
$port = 3306;
$username = "root";
$password = "root";
$dbname = "appdb";

try {
    $connexion = new PDO(
        "mysql:host=$servername;port=$port;dbname=$dbname",
        $username,
        $password
    );
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>