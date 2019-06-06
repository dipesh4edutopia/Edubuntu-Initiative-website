<?php
session_start();

//check if user has logged in
if($_SESSION["email"]=='' || !isset($_SESSION["email"]))
{	

// if not logged in redirect 
header("Location: /edubuntu/Login_v1/login_student.php?error=download");
		die();	
	
}


//if logged in 

//check if user has liked 
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	$dbname = "edubuntu";
	
	 
	 
	//online server  login 
/*  	$servername = "sql102.epizy.com";
$username = "epiz_23803885";
$password = "nXBZqJIhIJm4Tn";
$dbname = "epiz_23803885_edubuntu";  */
	
	$conn = new mysqli($servername, $username, $password,$dbname);
	
	$email=$_SESSION["email"];	
	$type=$_SESSION["type"];
	$sql = "SELECT likes FROM {$type} WHERE email='{$email}' ";
	$result = $conn->query($sql);	
	$row = $result->fetch_assoc();//get liked status 
	$liked="heart";
	$like_msg="LIKE US!";
	if($row['likes']==='1')//if user has pressed the like button in older sessions 
	{
	$liked="heart is-active"; //this is the heart animation class 
	$sql = "SELECT likes FROM global  ";
	$result = $conn->query($sql);	
   	$row = $result->fetch_assoc();//get liked status 
	$like_msg="TOTAL LIKES: ".$row['likes'];
	}
// if user has liked then class is "heart is-active" else class is "heart"	
	
//check if user pressed heart (ajax get request )	
if(isset($_GET['like']) && isset($_SESSION["email"])  )
{
	/* 	// Check connection
	if ($conn->connect_error)
		{
		die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully"; */
		
		//if he liked only once 
         if($row['likes']==='0')
         {
         		$sql = "UPDATE {$type} SET likes = likes + 1 WHERE email='{$email}' ";		
         		$result = $conn->query($sql);
         
         		$sql='UPDATE global SET likes = likes + 1';
         		$result = $conn->query($sql);
         		
         		
         }	
		$sql = "SELECT likes FROM global  ";
   		$result = $conn->query($sql);	
   		$row = $result->fetch_assoc();//get liked status 
		echo "TOTAL LIKES: ".$row['likes'];
	exit;
}

// if download request 
// todo: direct file download
$FileName ='';

if(isset($_GET["course"]) &&  isset($_GET["sem"]))
{
	$course=$_GET["course"];
$sem=$_GET["sem"];
$email=$_SESSION["email"];
///fails for some  reason //TODO
/* echo  $sem.$course;
//https://www.php.net/manual/en/function.header.php // 1st example 

header('Content-Type: application/');

// It will be called downloaded.pdf
header("Content-Disposition: attachment; filename='{$email}.txt'");

// The PDF source is in original.pdf
readfile("‪http://localhost/edubuntu/Login_v1/file/{$course}{$sem}.txt");
 */

 
 //record sem and course choice in student table
$sql = "UPDATE student SET branch = '{$course}', sem = '{$sem}' WHERE email='{$email}' ";		
$result = $conn->query($sql);

//update no of download counter in global table 
 $sql='UPDATE global SET downloads = downloads + 1';
 $result = $conn->query($sql);
 
 
 
$FileName = "/edubuntu/Login_v1/file/{$course}{$sem}.txt";

}

?>
<!-- https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=navbar-dropdown-login-and-signup-form-with-social-buttons  -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/heartstyle.css">
<?php include('header.php'); ?>
<!--main top bar ------------------------------------------------------------------------------------------------------------>
<!-- https://getbootstrap.com/docs/4.0/components/dropdowns/  -->
<!--https://codepen.io/wallaceerick/pen/ctsCz-->
	<div class="limiter">
		<div class="container-login100">
			<form action="/edubuntu/Login_v1/download.php" method="get">
				<center>


<div class="input-group mb-3" width="30" style="margin-left: 20px">
					<div class="input-group-prepend" style="margin-left: 20px">
						<label class="input-group-text" for="inputGroupSelect01">Course </label>
					</div>
  
  <select class="custom-select" id="course" name="course" >
    <option value="Computer">Computer</option>
    <option value="IT">IT</option>
    <option value="ENTC">ENTC</option>
  </select>
					<div class="input-group-prepend" style="margin-left: 20px">
					<br>
						<label class="input-group-text" for="inputGroupSelect01" >Semester </label>
					</div>
  <select class="custom-select" id="sem" name="sem" >
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
  </select>
  <br>
				<input type="submit" class="btn btn-primary" style="margin-top: 20px">
  <br>
				<a href="<?php if($FileName) echo $FileName;?>"><?php if($FileName) echo "rightclick here to downoad"?></a>
</div>


		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="js/index.js"></script>
</center>
</form>
</div>


<!---heart animation --------------------------------------------------------------------------------------------------->
<div class="container-login100">
	<div class="" style="display: inline-block; width=100%">
 <!--here class of heart is decided according to php liked variable -->
		<div style="margin-left: 35px;" ><div class="<?php echo $liked;?>" id="heart_anim" style="" onclick='inc_like();'></div> <h3 id="like_us"> LIKE US!</h3></div>

	</div>
  
</div>
<script >
/*https://www.w3schools.com/xml/tryit.asp?filename=tryajax_get2*/
var inc_like = function() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("like_us").innerHTML = this.responseText;
	  document.getElementById("heart_anim").classList.add("is-active");
	  
    }
  };
  xhttp.open("GET", "/edubuntu/Login_v1/download.php?like=true", true);
  xhttp.send();
  
}
</script>


  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

	
	</div>
	
</body>

</html>
	
	
