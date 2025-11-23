<?php
session_start();

if (!isset($_SESSION['roll'])) {
    // If session not set, do not allow access
    header("Location: studentlogin.php");
    exit();
}

$roll = $_SESSION['roll'];

$conn = mysqli_connect("localhost", "root", "", "db");

// Fetch student details
$sql = "SELECT * FROM student WHERE roll = '$roll'";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);

// Fetch marks (optional)
$sql2 = "SELECT * FROM marks WHERE roll = '$roll'";
$result2 = mysqli_query($conn, $sql2);
$marks = mysqli_fetch_assoc($result2);
?>
<!DOCTYPE html>
<html>
<body>

<h1>Welcome, <?= $student['name'] ?>!</h1>

<h2>Your Details</h2>
<table border="1">
<tr><td>Roll No</td><td><?= $student['roll'] ?></td></tr>
<tr><td>Name</td><td><?= $student['name'] ?></td></tr>
<tr><td>Address</td><td><?= $student['address'] ?></td></tr>
<tr><td>Phone</td><td><?= $student['phoneno'] ?></td></tr>
</table>

<br>

<?php if ($marks) { ?>
<h2>Your Marks</h2>
<table border="1">
<tr><td>Science</td><td><?= $marks['science'] ?></td></tr>
<tr><td>Maths</td><td><?= $marks['maths'] ?></td></tr>
<tr><td>English</td><td><?= $marks['english'] ?></td></tr>
<tr><td>Total</td><td><?= $marks['total'] ?></td></tr>
</table>
<?php } ?>

<br>
<a href="logout.php">Logout</a>

</body>
</html>
