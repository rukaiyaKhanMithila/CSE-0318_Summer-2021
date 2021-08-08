
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
      <br>

        <form action= "up.php" method="POST" >
  <label>Passenger:</label>
<input type="text" name="passenger">
<label>Route:</label>
<select name="road">
                                <option>Dhaka-Mymensingh</option>
                                <option>Dhaka-Comilla</option>
                                <option>Dhaka-Shylet</option>
                                <option>Dhaka-Borisal</option>
                                <option>Dhaka-Rongpur</option>
                            </select>
  <br>
  <label>Bus:</label>
 <select name="Bus">
                                <option>Starline</option>
                                <option>Greenline</option>
                                <option>ENA</option>
                                <option>Bangla</option>
                                <option>Dipjol</option>
                            </select>
  <br>
   <label>Date:</label>
  <input type="Date" name="dat">
  <br>
     <label>Class:</label>
   <select name="class">
                                <option>1st Class</option>
                                <option>2nd Class</option>
                                <option>Normal Class</option>
                                <option>Buisness Class</option>
                            </select>
                        
  <br>
     <label>Seat No. :</label>
  <input type="text" name="seatno" >

  <br>
  <input style="margin-left: 10px;" type="submit" name="submit" value="Submit">


</form>
      </div>

         
    </div>


</body>
</html>
<?php
}
?>