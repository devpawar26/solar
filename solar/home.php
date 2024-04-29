<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Integral Power Solutions</title>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Times New Roman', serif; /* Default font */
    }

    body {
      background-color: #355E3B; /* dark green */
      color: #F5F5DC; /* beige */
      line-height: 1.6;
      text-align: left;
    }

    header {
      background-color: #4A774C; /* slightly lighter dark green */
      color: #F5F5DC;
      padding: 20px 40px;
    }

    header h1 {
      font-family: 'Dancing Script', cursive; /* Special font for header */
    }

    header img {
      width: 120px; /* Example size, adjust as needed */
      height: auto;
    }

    nav {
      background-color: #3D6B3A; /* dark green */
      color: #F5F5DC;
      padding: 10px 40px;
      text-align: right;
    }

    nav a {
      color: #F5F5DC;
      text-decoration: none;
      margin: 0 15px;
      transition: color 0.3s ease;
    }

    nav a:hover {
      color: #FFF5EE; /* lighter shade for hover effect */
    }

    main {
      padding: 40px;
      text-align: center; /* Align content of main centrally */
    }

    .middle-image {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 40px auto;
      width: 80%;
    }

    .event-boxes {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      margin-top: 40px;
    }

    .event-box {
      width: calc(33% - 20px);
      background-color: #F5F5DC; /* beige */
      color: #355E3B; /* text color dark green */
      border: none;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
      transition: transform 0.3s ease;
    }

    .event-box:hover {
      transform: scale(1.05); /* subtle zoom effect */
    }

    .event-box img {
      max-width: 100%;
      height: auto;
      margin-bottom: 20px;
    }

    .event-box h2 {
      margin-bottom: 10px;
    }

    .image-gallery {
      display: flex;
      justify-content: space-around;
      padding: 20px 0;
    }

    .image-gallery img {
      width: 30%;
      height: auto;
      transition: transform 0.3s ease;
    }

    .image-gallery img:hover {
      transform: scale(1.1); /* subtle hover effect */
    }

    footer {
      background-color: #4A774C; /* dark green footer */
      color: #F5F5DC;
      text-align: center;
      padding: 20px 40px;
    }

    button {
      background-color: #F5F5DC; /* beige */
      color: #355E3B; /* dark green */
      border: 1px solid #4A774C;
      padding: 10px 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #4A774C; /* dark green */
      color: #F5F5DC;
    }
  </style>
</head>
<body>
  <header>
    <h1>Integral Power Solutions</h1>
  </header>

  <nav>
    <a href="home.html">Home</a>
    <a href="about.html">About Us</a>
    <a href="products.html">Products</a>
    <a href="contact.html">Contact</a>
    <a href="signup.html">Sign Up</a>
    <a href="login.html">Login</a>
    <a href="career.html">Career</a>
  </nav>
  <div class="nav">
    <div class="header">
        <p><a href="home.php"></h1></a> </p>
    </div>


  <div class="right-links">

    <?php 
    
    $id = $_SESSION['id'];
    $query = mysqli_query($con,"SELECT*FROM users1 WHERE Id=$id");

    while($result = mysqli_fetch_assoc($query)){
        $res_Uname = $result['Username'];
        $res_Email = $result['Email'];
        $res_Age = $result['Age'];
        $res_id = $result['Id'];
    }
    
    ?>

    <a href="logout.php"> <button class="btn">Log Out</button> </a>

</div>

<div class="main-box top">
  <div class="top">
    <div class="box">
        <p>Hello <b><?php echo $res_Uname ?></b>, Welcome</p>
    </div>
    <div class="box">
        <p>Your email is <b><?php echo $res_Email ?></b>.</p>
    </div>
  </div>
</div>
  <main>
    <h2>Our Featured Products</h2>
    <img src="1.jpg" alt="Solar Panel" class="middle-image">
    <div class="event-boxes">
      <div class="event-box">
        <img src="about.jpg" alt="Solar Product 1">
        <a href="products.html"><button>View Details</button></a>
        <h2>Solar Panels</h2>
        <p>High efficiency solar panels for residential and commercial use.</p>
      </div>
      <div class="event-box">
        <img src="2.jpg" alt="LED Light 1">
        <a href="products.html"><button>View Details</button></a>
        <h2>LED Lights</h2>
        <p>Durable and energy-efficient LED lighting solutions.</p>
      </div>
    </div>
    <div class="image-gallery">
      <img src="3.jpg" alt="Feature 1">
      <img src="4.jpg" alt="Feature 2">
      <img src="5.jpg" alt="Feature 3">
    </div>
  </main>
  <footer>
    <p>Copyright © 2024 Integral Power Solutions. All rights reserved.</p>
  </footer>
</body>
</html>

