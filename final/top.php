<?php
$conn = mysqli_connect("localhost", "root", "", "db");


$student = null;

    

    $sql = "SELECT student.roll, student.name,marks.science,marks.maths,marks.english,marks.total FROM student INNER JOIN marks  ON student.roll = marks.roll WHERE marks.total = (SELECT MAX(total) FROM marks)";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    }




?>
<!DOCTYPE html>
<html>
<body>
    
    <h1>Top Student</h1>
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
