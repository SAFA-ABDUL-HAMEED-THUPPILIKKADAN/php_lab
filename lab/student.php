<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Update</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$selected_roll = "";
$name = "";
$mark1 = "";
$mark2 = "";
$mark3 = "";


if (isset($_POST['search'])) {
    $selected_roll = $_POST['roll'];
    $sql = "SELECT * FROM student WHERE roll='$selected_roll'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $mark1 = $row['mark1'];
        $mark2 = $row['mark2'];
        $mark3 = $row['mark3'];
    } else {
        echo "<p style='color:red;'>No student found with that roll number.</p>";
    }
}

if (isset($_POST['update'])) {
    $selected_roll = $_POST['roll'];
    $mark1 = $_POST['mark1'];
    $mark2 = $_POST['mark2'];
    $mark3 = $_POST['mark3'];
    $total = $mark1 + $mark2 + $mark3;

    $update_sql = "UPDATE student SET mark1='$mark1', mark2='$mark2', mark3='$mark3', total='$total' WHERE roll='$selected_roll'";
    if (mysqli_query($conn, $update_sql)) {
        echo "<p style='color:green;'>Marks updated successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error updating record: " . mysqli_error($conn) . "</p>";
    }


    $sql = "SELECT * FROM student WHERE roll='$selected_roll'";
    $result = mysqli_query($conn, $sql);
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $mark1 = $row['mark1'];
        $mark2 = $row['mark2'];
        $mark3 = $row['mark3'];
    }
}
?>

<form method="POST" action="">
    <label>Roll no:</label>
    <select name="roll" required>
        <option value="">Select Roll</option>
        <?php
        $sql = "SELECT roll FROM student";
        $result = mysqli_query($conn, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $selected = ($row['roll'] == $selected_roll) ? "selected" : "";
                echo "<option value='{$row['roll']}' $selected>{$row['roll']}</option>";
            }
        }
        ?>
    </select>

    <input type="submit" name="search" value="Search"><br><br>

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" readonly><br><br>

    <label>Mark1:</label>
    <input type="text" name="mark1" value="<?php echo htmlspecialchars($mark1); ?>"><br><br>

    <label>Mark2:</label>
    <input type="text" name="mark2" value="<?php echo htmlspecialchars($mark2); ?>"><br><br>

    <label>Mark3:</label>
    <input type="text" name="mark3" value="<?php echo htmlspecialchars($mark3); ?>"><br><br>


    <input type="submit" name="update" value="Update">
    <input type="reset" value="Reset">
</form>

</body>
</html>
