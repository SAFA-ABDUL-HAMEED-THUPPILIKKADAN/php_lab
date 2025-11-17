<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Home</title>

  <!-- Bootstrap CSS -->
  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar-brand {
      font-weight: bold;
      font-size: 1.4rem;
    }
    .content {
      margin-top: 80px;
      text-align: center;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Student Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mark.php">Mark Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="update.php">Mark Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view.php">View Progress Card</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="content">
    <h1>Entry Mark</h1>
  </div>



  <form action="markentry(1).php" method="POST">

  <select name="roll">
    <?php 
$sql = "select roll from student";

$result = mysqli_query($conn,$sql);

 if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value = ".$row['roll'].">".$row['roll']."</option>";
    } 

       }

       

   ?>
  </select>



  <br>
    <input type="submit" value="search">



  






  <!-- Bootstrap JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>

</body>
</html>