<?php




?>






<!DOCTYPE html>
 <html lang='en'>
 <head>
 <meta charset='UTF-8'>
 <meta name='viewport' content='width=device-width, initial-scale=1.0'>
 <title>Luxury Holiday Packages</title>
 <link rel="stylesheet" href="stylehead.css">
 <link rel="stylesheet" href="stylefooter.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
 <style>
 body {
    font-family: 'Georgia', serif; background-color: #f8f9fa; color: #343a40; margin: 0; 
    background-image: url('norway2.jpg');
    background-size: cover;
    background-position: center;
    }


    .navbar 
    { 
        background-color: rgba(28, 28, 28, 0.8); 
        color: #f8f9fa; 
        padding: 15px; 
        text-align: center; 
        font-size: 1.5em; 
    }
 
 
    .sidebar 
    { 
        background-color: rgba(44, 44, 44, 0.8); 
        color: #f8f9fa; 
        padding: 15px; 
        width: 80px; 
        height: 100vh; 
        position: fixed; 
        top: 0; 
        left: 0; 
        font-size: 1.2em; 
    }
 
 
    .sidebar a 
    { 
        color: #d4af37; 
        text-decoration: none; 
        display: block; 
        margin: 10px 0; 
    }
 
    .sidebar a:hover 
    { 
        color: #f8f9fa; 
    }
 
    .content 
    { 
        margin-left: 270px; 
        padding: 20px; 
    }
 
    .luxury 
    {
        color: #d4af37; 
    }
 
    h2 
    {
        color: white; 
    }
 
    p 
    {
        color: white;
    }
 
 </style>
 </head>
 <body>
 <?php include 'header.php'; ?>
 <?php include 'navbar.php'; ?>
 <div class='navbar'><h1 class='luxury'>Luxury Holiday Packages</h1></div>
 
 <h2>Welcome to Luxury Holiday Packages</h2>
 <p>Explore our exclusive holiday packages and experience the luxury you deserve.</p>
 </div>
 <?php include 'footer.php'; ?>
 </body>
 </html>

