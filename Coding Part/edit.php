<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ams";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//form_Data_Catching
       if (isset($_REQUEST['post'])) {
       	 $id=$_REQUEST['id'];
         $name = $_REQUEST['name'];
         $email=$_REQUEST['email'];
         $pass=$_REQUEST['password'];
  
   

    $sql = "UPDATE user set name='".$_REQUEST['name']."', email='".$_REQUEST['email']."', password='".$_REQUEST['password']."' WHERE id='".$_REQUEST['id']."'";

}


if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: login.php");  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}




?>