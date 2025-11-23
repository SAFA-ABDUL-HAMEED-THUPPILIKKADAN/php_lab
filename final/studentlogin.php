<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      background:#fff;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-container {
      background: #fff;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      width: 320px;
      text-align: center;
      animation: fadeIn 0.7s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      color: #333;
      margin-bottom: 25px;
      letter-spacing: 1px;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      font-size: 15px;
      transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #2575fc;
      box-shadow: 0 0 5px rgba(37, 117, 252, 0.4);
    }

    input[type="submit"] {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      color: white;
      border: none;
      border-radius: 8px;
      padding: 12px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

  

  </style>
</head>
<body>
  <div class="form-container">
    <h2>Student Login</h2>
    <form action="studentlogin(1).php" method="POST">
      <input type="text" name="name" placeholder="Username" required>
      <input type="password" name="pass" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>

  </div>
</body>
</html>
