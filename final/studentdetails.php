<?php

$conn = mysqli_connect("localhost", "root", "", "db");

$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
</head>
<body>
<h1>Student Details</h1>

<table border="2">
<tr>
    <th>Roll no:</th>
    <th>Name:</th>
    <th>Address:</th>
    <th>Phone no:</th>
    <th></th>
</tr>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <form action='studentupdate.php' method='POST'>
                <td>".$row['roll']."</td>
                <td>".$row['name']."</td>
                <td>".$row['address']."</td>
                <td>".$row['phoneno']."</td>

                <td>
                    <input type='hidden' name='roll' value='".$row['roll']."'>
                    <input type='hidden' name='name' value='".$row['name']."'>
                    <input type='hidden' name='address' value='".$row['address']."'>
                    <input type='hidden' name='phoneno' value='".$row['phoneno']."'>
                    <button type='submit' name='Update'>Update</button>
                </td>
            </form>
        </tr>";
    }
}
?>
</table>
</body>
</html>
