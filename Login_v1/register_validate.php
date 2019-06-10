<?php
session_start();
//if user is already logged in means email is set in session hence direct him to download page

if(isset($_SESSION["email"]))
	{
		header("Location: /Edubuntu-Initiative/Login_v1/download.php");
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
//for student login 

			$sql = "SELECT valid,password FROM {$type} WHERE email='{$email}' ";
			$result = $conn->query($sql);	
			if($result->num_rows > 0)//found record //user exhist  
			{
				echo "email already exhist";
				header("Location: /Edubuntu-Initiative/Login_v1/register.php?error={$type}_email_exhist");
				die();
				//redirect to register as user already exhist 
			}
			else//no user found
			{
					//create account 
					$sql = "INSERT INTO {$type} (email, password, valid) VALUES ('{$email}', '{$pass}', 'true');";
					$result = $conn->query($sql);	
					$_SESSION["email"]=$email;
					$_SESSION["type"]=$type;
					//set session 
					//redirect to download
					//echo $sql;
					header("Location: /Edubuntu-Initiative/Login_v1/download.php");
					die();
			}
			



?>