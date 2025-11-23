<?php
session_start();

$name = $_POST['name'];
$pass = $_POST['pass'];

$conn = mysqli_connect("localhost", "root", "", "db");

$sql = "SELECT * FROM student WHERE username = '$name' AND password = '$pass'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    // Store student roll in session
    $_SESSION['roll'] = $row['roll'];

    echo "<script>alert('Login Successful'); window.location='studentview.php';</script>";
    exit();

} else {
    echo "<script>alert('Invalid username or password'); window.location='studentlogin.php';</script>";
    exit();
}
?>
