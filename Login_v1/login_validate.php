<?php
session_start();
//if user is already logged in means email is set in session hence direct him to download page
if(isset($_SESSION["email"]))
	{
				
		header("Location: /edubuntu/Login_v1/download.php");
		die();
	}	
//https://www.w3schools.com/php/php_mysql_connect.asp
//https://www.w3schools.com/php/php_mysql_select.asp

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "edubuntu";

 
 
//online server  login 
/* $servername = "sql102.epizy.com";
$username = "epiz_23803885";
$password = "nXBZqJIhIJm4Tn";
$dbname = "epiz_23803885_edubuntu"; */ 
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";




//$name=$_GET["name"];
$email=$_GET["email"];
$pass=$_GET["pass"];
$type=$_GET["type"];
//for student login  type = student and in database the table name is also student 
// same for teacher  
	
			$sql = "SELECT valid,password FROM {$type} WHERE email='{$email}' ";
			
			$result = $conn->query($sql);	
			if($result->num_rows > 0)//found record //user exhist  
			{
			$row = $result->fetch_assoc();//get user password and account status 
			if($row['password']==$pass)//if password match 
			{
				echo "correct pass";
				//start session and redirect to downloads
				$_SESSION["email"]=$email;
				$_SESSION["type"]=$type;
				
					//set session 
					//redirect to download
					header("Location: /edubuntu/Login_v1/download.php");
					die();
			}
			else
			{
				echo "incorrect pass";
				header("Location: /edubuntu/Login_v1/login_{$type}.php?error=invalid_pass");
				die();
				//redirect to login with incorrect pass 
			}
			
			}
			else//no user found
			{
				echo "no user found";
				header("Location: /edubuntu/Login_v1/login_{$type}.php?error=no_user");
				die();
				
				//redirect to login with no user found  
			}
			
	


?>