
        <?php 
            $name = $_GET['name'];
            $age = $_GET['age'];
            $roll = $_GET['roll'];
            $gender = $_GET['gender'];
            $mark1 = $_GET['mark1'];
            $mark2 = $_GET['mark2'];
            $mark3 = $_GET['mark3'];

            $total = $mark1 + $mark2 + $mark3;

 


$servername = "localhost";
$username = "root";
$password = "";
$database = "student";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";



       

        // $sql="insert into student(name, age, roll ,gender, mark1, mark2, mark3,total) values('$name', '$age', '$roll' ,'$gender', '$mark1','$mark2','$mark3','$total')";
        $sql = "select * from student where roll = '$roll'";

        $result = mysqli_query($conn,$sql);

       if (mysqli_num_rows($result) > 0) {
         echo "<script>alert('roll no already exists');document.location='lab12.php'</script>";
       }

     



            
        ?>

       










