<?php
echo "<h1>Median Salary</h1>";

if (file_exists("config.php") && file_exists("mediane.php")) {
    include "config.php";
    include "mediane.php";
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

    <?php
    if (isset($_POST['calculate_median'])) {
        $query = "SELECT salary FROM employees ORDER BY salary";
        $result = mysqli_query($conn, $query);
        $salaries = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $salaries[] = $row['salary'];
        }

        $median_salary = mediane($salaries);
        echo "<p>Median Salary: $median_salary</p>";
    }
    ?>
</body>
</html>