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
            <a class="nav-link" href="markentry.php">Mark Entry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="update.php">Mark Update</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="studentdetails.php">Student Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view.php">View Progress Card</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="content">
    <h1>Student Registration</h1>
  </div>




    <form action="studentreg.php" method="POST">

 Roll no:  <input type="number" name = "roll">
  <br>
 Name:  <input type="text" name = "name">
  <br>
  Address:<input type="text" name = "address">
  <br>

  phoneno:<input type="text" name = "phone">
<br>

 Username: <input type="text" name= "username">
 Password: <input type="password" name = "pass1">

confirm password: <input type="password" name = "pass2">


  <br>
    <input type="submit" value="register">







  <!-- Bootstrap JS -->
  <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
  </script>

</body>
</html>
