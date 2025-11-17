<?php

        $servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";



        $name=$_POST['name'];
        $roll=$_POST['roll'];

        $sql="insert into stud(name, rollno) values('$name','$roll')";

        if (mysqli_query($conn,$sql)){
                echo "inseted";
        }



?>