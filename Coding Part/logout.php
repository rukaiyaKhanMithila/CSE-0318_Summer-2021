<?php 
session_start();
$_SESSION["sess_user"] = "";
session_destroy();
header("Location: login.php");
?>