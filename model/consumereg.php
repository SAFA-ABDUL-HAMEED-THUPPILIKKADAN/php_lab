<?php

$conn = mysqli_connect("localhost","root","","db1");

if (!$conn) {
    die("Connection failed".mysqli_connect_error());
}


if (isset($_POST['save'])) {
    $consumername = $_POST['consumername'];
    $consumernumber = $_POST['consumernumber'];
    $address = $_POST['address'];
    $number = $_POST['number'];

    $sql = "INSERT INTO consumer(consumername,consumernumber,address,mobilenumber) VALUES ('$consumername','$consumernumber','$address','$number')";

    $result = mysqli_query($conn,$sql);

    if ($result) {
        echo "<script>alert('inserted successfully'); window.location='adminhome.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('Unable to insert'); window.location='consumerreg.php';</script>";
        exit();
    }
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">


    <input type="number" name="consumernumber" placeholder="consumer number">
    <input type="text" name="consumername" placeholder="consumer name">
    <input type="address" name="address" placeholder="address">
    <input type="number" name="number" placeholder="mobile number">

    <button type="submit" name="save">Save</button>



    </form>
</body>
</html>