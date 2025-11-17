<?php 
    $roll=$_POST['roll'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $username1=$_POST['username'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



    if($pass1 == $pass2){
$insert_sql = "INSERT INTO student(roll, name, address,phoneno, username, password)
                   VALUES ('$roll', '$name', '$address','$phone' , '$username1', '$pass1')";

    if (mysqli_query($conn, $insert_sql)) {
        echo "<script>
                alert('Record inserted successfully!');
                document.location='home.php';
              </script>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }

    }
    else{


         echo "<p style='color:red;'>password didn't matched: </p>";
    }



    
    





?>