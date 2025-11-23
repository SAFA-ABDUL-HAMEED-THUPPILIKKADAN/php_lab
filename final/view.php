<?php
$conn = mysqli_connect("localhost", "root", "", "db");

$selected_roll = "";
$student = null;

// When SEARCH button is clicked
if (isset($_POST['search'])) {
    $selected_roll = $_POST['roll'];

    $sql = "SELECT student.roll, student.name,marks.science,marks.maths,marks.english,marks.total FROM student INNER JOIN marks  ON student.roll = marks.roll WHERE student.roll = '$selected_roll'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    }
}



?>
<!DOCTYPE html>
<html>
<body>
    <a href="top.php">View Top Student</a>
    <h1>Know your marks Here</h1>

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

<table>
    <tr>
        <td>Roll no</td>
        <td><?= $student['roll']?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?= $student['name']?></td>
    </tr>
    <tr>
        <td>Science</td>
        <td><?= $student['science']?></td>
    </tr>
    <tr>
        <td>Maths</td>
        <td><?= $student['maths']?></td>
    </tr>
    <tr>
        <td>English</td>
        <td><?= $student['english']?></td>
    </tr>
    <tr>
        <td>Total</td>
        <td><?= $student['total']?></td>
    </tr>
</table>


<?php } ?>

</body>
</html>
