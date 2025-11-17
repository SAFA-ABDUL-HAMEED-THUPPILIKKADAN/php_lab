<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <label for="">Roll no:</label> <select name="" id="">

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

$sql = "select roll from student";

$result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value = ".$row['roll'].">".$row['roll']."</option>";
    } 

       }

  
  
  
  ?>


    </select>

    <input type="button" value="search">
    <label for="">Name: 
    <label for="">Mark1</label><input type="text">
    <label for="">Mark2</label> <input type="text">
    <input type="button" value = "update">
    <input type="reset" value="update">

</body>
</html>