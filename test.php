<!DOCTYPE html>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>users </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="sss.css"/>
       
   

    <title>Student Registration Form</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    header,aside{
        background-color: #86cfeb;
        margin:0px;
    }
    .list{
        background-color:#86cfeb;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    input,
    select,
    textarea {
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 5px;
      border: none;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
    


</head>
<body>

<?php
    
include_once 'header.php';  

  ?>

  <div class="container">
    <h1>Student Registration Form</h1>
    <form action="insert.php" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="student-id">Student ID:</label>
      <input type="text" id="student-id" name="student-id" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name="dob" required>

      <label for="program">Program:</label>
      <input type="text" id="program" name="program" required>

      <label for="contact">Contact:</label>
      <input type="text" id="contact" name="contact" required>

      <label for="gender">Gender:</label>
      <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="address">Address:</label>
      <input type="text" id="address" name="address" required></input>

      <input type="submit" name="submit" value="Register">
    </form>
  </div>







<!--
    <div class="row justify-content-center">
    <div class="col-md-8 col-5 bg-light rounded-2">
        
    <div class="signin-form">

    <h3> Admin login </h3>

    <form action="login.php" method="post">
    <input class = "m-1"type="text" name="username" placeholder="username">
    <br/>
    <input class = "m-1"type="password" name="password" placeholder="password">
    <br/>
    <button class = "m-1 align-center" type="submit" value="login">Login</button>
    </form>
</div>
</div>-->



</div>
    

</body>
</html>
