<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!<br>";

$roll = $_POST['roll'];
$name = $_POST['name'];
$address = $_POST['address'];
$user = $_POST['username'];
$pass = $_POST['password'];


$check_sql = "SELECT * FROM studentform WHERE roll = '$roll'";
$check_result = mysqli_query($conn, $check_sql);

if (mysqli_num_rows($check_result) > 0) {
    
    echo "<script>
            alert('Roll number already exists!');
            document.location='studentReg.php';
          </script>";
} else {
    
    $insert_sql = "INSERT INTO studentform (roll, name, address, username, password)
                   VALUES ('$roll', '$name', '$address', '$user', '$pass')";

    if (mysqli_query($conn, $insert_sql)) {
        echo "<script>
                alert('Record inserted successfully!');
                document.location='studentReg.php';
              </script>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
