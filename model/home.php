<?php




$conn = mysqli_connect("localhost","root","","db1");

if (!$conn) {
    die("Connection failed".mysqli_connect_error());
}


if (isset($_POST['login'])) {
    $name = $_POST['name'];
$password = $_POST['password'];

    $sql="SELECT * FROM login1 WHERE username = '$name' AND password = '$password'";
    $result = mysqli_query($conn,$sql);

    if (mysqli_num_rows($result)>0) {
        echo "<script>alert('login successful');
        window.location = 'searchbill.php';</script>";
        exit();
    }
    else {
        echo "<script>alert('unable to login');
        window.location = 'home.php';</script>";
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
    <p>Admin Home</p>
    <form method="POST">
     
    <input type="text" name="name" placeholder="Username" required>
    <input type="text" name="password" placeholder="password" required>
    <button type="submit" name="login">login</button>



    </form>
    
</body>
</html>