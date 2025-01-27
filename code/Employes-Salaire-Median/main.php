<?php
echo "<h1>Median Salary</h1>";

if (file_exists("config.php") && file_exists("mediane.php")) {
    include "config.php";
    include "mediane.php";
    include "moyenne.php";
} else {
    die("Required files are missing.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Median Salary</title>
</head>
<body>
    <form method="post" action="">
        <button type="submit" name="calculate_median">Calculate Median Salary</button>
    </form>
    <form method="post" action="">
        <button type="submit" name="calculate_moyenne">Calculate moyenne Salary</button>
    </form>

    <?php
    if (isset($_POST['calculate_median'])) {
        $query = "SELECT salary FROM employees ORDER BY salary";
        $result = $connexion->query($query);
        $salaries = $result->fetchAll(PDO::FETCH_COLUMN);
    
        $median_salary = mediane($salaries);
        echo "<p>Median salaire: $median_salary</p>";
    }
    if (isset($_POST['calculate_moyenne'])) {    
        $query = "SELECT salary FROM employees";
        $result = $connexion->query($query);
        $salaries = $result->fetchAll(PDO::FETCH_COLUMN);
    
        $average_salary = moyenne($salaries);
        echo "<p>Moyenne salaire: $average_salary</p>";
    }
    ?>
</body>
</html>