<?php
$selected_consumer="";
$consumers = null;
$conn = mysqli_connect("localhost","root","","db1");

if (!$conn){
    die("connection failed".mysqli_connect_error());
}




if (isset($_POST['search'])) {
    $consumernumber = $_POST['consumer'];
    $sql2 = "SELECT * FROM consumer WHERE consumernumber='$consumernumber'";

    $result1 = mysqli_query($conn,$sql2);


    if (mysqli_num_rows($result1) > 0) {
        $consumers = mysqli_fetch_assoc($result1);
    }
}


if (isset($_POST['save'])) {
   $selected_consumer=$_POST['consumernumber'];
    $units = $_POST['units'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];



    $sql = "INSERT INTO bill (consumernumber,unit,amount,date) VALUES ('$selected_consumer','$units','$amount','$date')";

    $result = mysqli_query($conn,$sql);

    if ($result){
        echo "<script>alert('Bill inserted successfully');
        window.location = 'searchbill.php';</script>";
    }

    else{
        echo "<script>alert('Failed to insert bills');
        window.location = 'billentry.php';</script>";
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

            <p>Consumer Details</p>
            Consumer number: <?=$consumers['consumernumber']?><br><br>
            Consumer name: <?=$consumers['consumername']?>
<?php } ?>


<form action="" method="POST">
    <input type="hidden" name="consumernumber" value="<?=$consumers['consumernumber']?>">

<input type="number" name="units" placehoder="units"><br>
<input type="number" name="amount" placeholder="amount"><br>
<input type="date" name="date" id=""><br>

<button type="submit" name="save">save</button>
</form>


</body>
</html>