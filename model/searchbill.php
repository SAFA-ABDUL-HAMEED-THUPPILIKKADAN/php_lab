<?php


$selected_consumer = " ";
$consumers = null;
$conn = mysqli_connect("localhost","root","","db1");

if (!$conn){
    die("connection failed".mysqli_connect_error());
}




if (isset($_POST['search'])) {
    $selected_consumer = $_POST['consumer'];
    $sql2 = "SELECT consumer.consumernumber,consumer.consumername,consumer.address,consumer.mobilenumber,bill.unit,bill.amount,bill.date FROM consumer INNER JOIN bill ON consumer.consumernumber=bill.consumernumber WHERE consumer.consumernumber='$selected_consumer'";

    $result1 = mysqli_query($conn,$sql2);


    if (mysqli_num_rows($result1) > 0) {
        $consumers = mysqli_fetch_assoc($result1);
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
   <p>Select a consumer number</p>
    <select name="consumer" id="">
        <option value="">select your consumer number</option>
        <?php
        $sql1 = "SELECT consumernumber FROM consumer";

        $result2 = mysqli_query($conn,$sql1);

          while ($row = mysqli_fetch_assoc($result2)) {
            echo "<option value='".$row['consumernumber']."'>".$row['consumernumber']."</option>";
          }
?>


    </select>
        <button type="submit" name="search">Search</button>

    </form>

        
        

       <?php if ($consumers) { ?>

            <h1>Consumer Details</h1>
            Consumer number: <?=$consumers['consumernumber']?><br>
            Consumer name: <?=$consumers['consumername']?><br>
            Consumer Address: <?=$consumers['address']?><br>
            Mobile number: <?=$consumers['mobilenumber']?><br>
            <h3>Bill Details</h3>

                 Units used: <?=$consumers['unit']?><br>
                 Amount: <?=$consumers['amount']?><br>
                 date of issue: <?=$consumers['date']?>
<?php } ?>
<br>
<a href="adminhome.php">Enter a new consumer/Enter a bill</a>

</body>
</html>