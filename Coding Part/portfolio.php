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


<style type="text/css">
  table{


    color: white;
  }
</style>

</head>
<body>

  <div class="logo" ><img src="img/bus.png" style="border-radius: 50%;" height="200" width="200">


    </div>

  <div class="navBar">
    
    <div class="right">
    
    <a href="index.php">Buy Ticket</a>
    <a href="Information.php">Information</a>
    
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

       <table class="table table-boadered">
  
<thead> 
<tr>
<th>Id</th>
<th>name</th>
<th>Email</th>
<th>Password</th>
<th>Edit</th>
</tr>

</thead>


<tbody>


<?php
include_once "log_page.php" ; 
$server='localhost';
$username='root';
$password='';
$dbname='ams';

$conn=mysqli_connect($server,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sq = "SELECT * FROM user WHERE email='".$_SESSION["sess_user"]."'";
$result = $conn->query($sq);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    ?>
    <tr>
 <td>
        <?php
    echo  $row["id"] ?>
</td>
      <td>
        <?php
    echo  $row["name"] ?></td>

    <td>
        <?php
    echo  $row["email"] ?></td>

    <td>
        <?php
    echo  $row["password"] ?></td>

<td><a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"> Edit</td>

    <?php
 }

}

 else {
  echo "0 results";
}

?>

</tbody>

</table>
      </div>

         
    </div>


</body>
</html>
<?php
}
?>