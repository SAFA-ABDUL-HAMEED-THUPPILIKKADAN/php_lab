<?php
$roll = $_POST['roll'];
$name = $_POST['name'];
$address = $_POST['address'];
$phoneno = $_POST['phoneno'];

$conn = mysqli_connect("localhost", "root", "", "db");

if (isset($_POST['update'])) {

    $new_address = $_POST['address1'];
    $new_phoneno = $_POST['phoneno1'];

    $sql = "UPDATE student SET address = '$new_address', phoneno = '$new_phoneno' WHERE roll = '$roll'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Student Details Updated Successfully!');
           window.location = 'studentdetails.php';</script>";
    } else {
        echo "<script>alert('Error Updating Student Details!');</script>";
    }
}


if (isset($_POST['delete'])) {

    

    $sql1 = "DELETE FROM student WHERE roll = '$roll'";

    if (mysqli_query($conn, $sql1)) {
        echo "<script>alert('Student Details Deleted Successfully!');
           window.location = 'studentdetails.php';</script>";
    } else {
        echo "<script>alert('Error Deleting Student Details!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
</head>
<body>

<h1>Update Student Details</h1>

<p>Roll No: <strong><?php echo $roll; ?></strong></p>
<p>Name: <strong><?php echo $name; ?></strong></p>

<form action="" method="POST">
    
    <!-- Hidden values so update works -->
    <input type="hidden" name="roll" value="<?php echo $roll; ?>">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    
    Address:  
    <input type="text" name="address1" value="<?= $address ?>"><br><br>

    Phone No:  
    <input type="number" name="phoneno1" value="<?= $phoneno ?>"><br><br>

    <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>

</form>

</body>
</html>
