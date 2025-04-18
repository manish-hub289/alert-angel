
<?php
session_start();
include("connect.php");

?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alert Angel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #003366;
            padding: 10px;
            color: white;
        }
        .navbar h1 {
            display: inline;
            margin: 0;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        .button {
            background-color: #003366;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .welcome-section {
            text-align: center;
            background-color: #007acc;
            color: white;
            padding: 20px 0;
            margin: 20px 0;
        }
        .about-section {
            text-align: center;
            margin: auto;
        }
        footer {
            margin-top: 300px;
            text-align: center;
            padding: 10px 0;
            background-color: #003366;
            color: white;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <h1>ALERT ANGEL</h1>
    </div>

    <div class="welcome-section">
        <h2>Welcome to ALERT ANGEL</h2>
        <p>Your safety is our priority. Empowering women with knowledge and resources for a safer tomorrow.</p>
    </div>

    <div class="buttons">
        <button id="location" class="box1" style=" background-color: #003366;" >live location</button>
        <script src="location.js"></script>
        <a href="safty.html" class="button">Safety Tips</a>
        <a href="call.html" class="button">Emergency Contacts</a>
        <a href="policestation.html" class="button">police station</a>
        <a href="#" class="button">About Us</a>
    </div>

    <div class="about-section">
        <h2>About Us</h2>
        <p>We are dedicated to providing resources, tips, and emergency contacts to help women stay safe and secure in any situation.</p>
    </div>
    <div style="text-align:center; padding:15%;">
        <p  
        <?php 
         if(isset($_SESSION['email'])){
          $email=$_SESSION['email'];
          $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
          while($row=mysqli_fetch_array($query)){
              echo $row['firstName'].' '.$row['lastName'];
          }
         }
         ?>
         :)
        </p>
        <a href="logout.php">Logout</a>
      </div>
    <footer>
        <p>&copy; 2025 Women’s Security. All rights reserved.</p>
    </footer>

</body>
</html>