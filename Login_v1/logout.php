<?php 
session_start(); // imp ! always place it in start
?>
<?php
$_SESSION["email"]="";
setcookie("PHPSESSID", "", -1, "/");
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
echo "LOGGING OUT...";
sleep(5);
header("Location: /Edubuntu-Initiative/Login_v1/login_student.php");
die();
?>