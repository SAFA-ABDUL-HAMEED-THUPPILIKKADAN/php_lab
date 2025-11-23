<?php
$conn = mysqli_connect("localhost", "root", "", "db");

$selected_roll = "";
$student = null;

// When SEARCH button is clicked
if (isset($_POST['search'])) {
    $selected_roll = $_POST['roll'];

    $sql = "SELECT * FROM student WHERE roll = '$selected_roll'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    }

    
    $sql3 = "SELECT * FROM marks WHERE roll = '$selected_roll'";
    $result3 = mysqli_query($conn, $sql3);

    if (mysqli_num_rows($result3) > 0) {
        $mark = mysqli_fetch_assoc($result3);
    }
}

// When SAVE MARKS button is clicked
if (isset($_POST['save'])) {

    $roll = $_POST['roll'];  // comes from hidden input

    $science = $_POST['science'];
    $maths   = $_POST['maths'];
    $english = $_POST['english'];

    $total = $science + $maths + $english;

    $sql3 = "UPDATE marks SET science = '$science', maths = '$maths', english = '$english', total = '$total' where roll = '$roll'";

    if (mysqli_query($conn, $sql3)) {
        echo "<script>alert('Marks Updated!');</script>";
    } else {
        echo "<script>alert('Error Updating marks!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Mark Update</h1>

<!-- SEARCH FORM -->
<form method="POST">
    <select name="roll" required>
        <option value="">--Select Roll--</option>

        <?php
        $sql2 = "SELECT roll FROM student";
        $result2 = mysqli_query($conn, $sql2);

        while ($row = mysqli_fetch_assoc($result2)) {
            echo "<option value='".$row['roll']."'>".$row['roll']."</option>";
        }
        ?>
    </select>

    <button type="submit" name="search">Search</button>
</form>

<hr>


<?php if ($student) { ?>
    <h3>Student Details</h3>
    Name: <?= $student['name'] ?><br><br>

    <!-- MARK ENTRY FORM -->
    <form method="POST">
        <input type="hidden" name="roll" value="<?= $student['roll'] ?>">

        Science: <input type="number" name="science" value="<?= $mark['science'] ?? '' ?>"><br>
        Maths:   <input type="number" name="maths" value="<?= $mark['maths'] ?? '' ?>"><br>
        English: <input type="number" name="english" value="<?= $mark['english'] ?? '' ?>"><br>

        <button type="submit" name="save">Update Marks</button>
    </form>
<?php } ?>

</body>
</html>
