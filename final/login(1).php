<?php
    $name = $_POST['name'];
    $pass = $_POST['pass'];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



        $sql="SELECT * FROM login WHERE name= '$name' AND pass='$pass'";

        $result=mysqli_query($conn ,$sql);

        if (mysqli_num_rows($result) > 0){
          
            header("location:home.php");
        }else{
            echo "<script>alert('invalid username or password')</script>;";
             header("location:login.php");
        }

