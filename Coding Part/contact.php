
<?php 
include_once "log_page.php" ; 
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>


<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
<link rel="stylesheet" href="style.css">

</style>

</head>
<body>

  <div class="logo" ><img src="img/bus.png" style="border-radius: 50%;" height="200" width="200">


    </div>

  <div class="navBar">
    
    <div class="right">
    
    <a href="index.php">Buy Ticket</a>
    <a href="information.php">Information</a>
    
    <a href="portfolio.php">Profile</a>
    <a href="contact.php">Contact Us</a>
        </div>
        <div class="left">
    
     <a  href="logout.php" >Logout</a>
     <a  href="#" >Download Ticket</a>

    </div>
  </div>

                             
                              
                               
  
 <div class="container">
        <div class="contact">
            <p>For further information please contact:-  Rukaiya-khanrukaiya78@gmail.com</p>
        </div>

         
    </div>


</body>
</html>
<?php
}
?>