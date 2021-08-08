<?php 
include_once "log_page.php" ; 

session_start();  

if(!isset($_SESSION["sess_user"])){  
    header("location:login.php"); 

} else {  

  $con=new mysqli("localhost", "root","", "ams"); 
  
   
    $sql = "SELECT * FROM user WHERE email='".$_SESSION["sess_user"]."'"; 
    $result = $con->query($sql);
    
    
    while( $row = $result->fetch_assoc()) 
    { 

   $id=$row['id']; 	
    $name=$row['name'];

    $email=$row['email'];  
    $pass=$row['password'];  
    }  




?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="edit.php" method='post'>
  <div class="container">
    <div class="logo" style="margin-left: 5px;"><img src="img/bus.png" style="border-radius: 50%;" height="200" width="200">


    </div>
    
    <h1>Edit Information</h1>
 
    <hr>
        <label for="id"><b>ID</b></label>
    <input type="text" name="id" id="name" readonly value='<?php echo $id ?>'>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" value='<?php echo $name ?>'>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" value='<?php echo $email ?>'>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw" value='<?php echo $pass ?>'>


    <input type="submit" style="background-color: #666699;" name="post" value="Submit" class="registerbtn">
  </div>
  

</form>

</body>
</html>

<?php



}



?>