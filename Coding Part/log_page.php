<?php

 


if(isset($_POST["post"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) { 

  session_start(); 
    $user=$_POST['email'];  
    $pass=$_POST['password'];  
  
    $con=new mysqli("localhost", "root","", "ams"); 
  
   
    $sql = "SELECT * FROM user WHERE email='".$user."' AND password='".$pass."'"; 
    $result = $con->query($sql);
    if($result!=0)  
    {  
    while( $row = $result->fetch_assoc()) 
    { 
    $dbid=$row['id']; 
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
 $_SESSION["sess_user"]=$user; 
 $_SESSION["sess_id"]=$dbid;
  
    /* Redirect browser */  
    header("Location: index.php");  
    }  
    }

     else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>