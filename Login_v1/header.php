
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/bootstrap-dropdownhover.min.js"></script>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/css" href="css/animate.min.css"><link rel="stylesheet" type="text/css" href="css/bootstrap-dropdownhover.min.css"">
<!--===============================================================================================-->
<!---TEMPLATE FROM  -------------------------------------------------------------------------------------------------------------------->
<!--https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=navbar-dropdown-login-and-signup-form-with-social-buttons-->

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edubuntu-Initiative</title>
<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;		
		font-weight: normal;
		font-size: 13px;
	}
	.form-control:focus {
		border-color: #33cabb;
		box-shadow: 0 0 8px rgba(0,0,0,0.1);
	}
	.navbar-header.col {
		padding: 0 !important;
	}	
	.navbar {
		background: #fff;
		padding-left: 16px;
		padding-right: 16px;
		border-bottom: 1px solid #dfe3e8;
		border-radius: 0;
	}
	.nav-link img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
		padding-left: 0;
		font-size: 20px;
		padding-right: 50px;
	}
	.navbar .navbar-brand b {
		font-weight: bold;
		color: #ffac06;		
	}
	.navbar .form-inline {
        display: inline-block;
    }
	.navbar .nav li {
		position: relative;
	}
	.navbar .nav li a {
		color: #888;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
        padding-right: 35px;
		border-color: #dfe3e8;
        border-radius: 4px !important;
		box-shadow: none
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
		color: #fff;
		background: #ffac06;
		padding-top: 8px;
		padding-bottom: 6px;
		vertical-align: middle;
		border: none;
	}	
	.navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {		
		color: #fff;
		outline: none;
		background: #31bfb1;
	}
	.navbar .navbar-right li:first-child a {
		padding-right: 30px;
	}
	.navbar .nav-item i {
		font-size: 18px;
	}
	.navbar .dropdown-item i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar ul.nav li.active a, .navbar ul.nav li.open > a {
		background: transparent !important;
	}	
	.navbar .nav .get-started-btn {
		min-width: 120px;
		margin-top: 8px;
		margin-bottom: 8px;
	}
	.navbar ul.nav li.open > a.get-started-btn {
		color: #fff;
		background: #31bfb1 !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .nav .dropdown-menu li {
		color: #999;
		font-weight: normal;
	}
	.navbar .nav .dropdown-menu li a, .navbar .nav .dropdown-menu li a:hover, .navbar .nav .dropdown-menu li a:focus {
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .navbar-form {
		border: none;
	}
	.navbar .dropdown-menu.form-wrapper {
		width: 280px;
		padding: 20px;
		left: auto;
		right: 0;
        font-size: 14px;
	}
	.navbar .dropdown-menu.form-wrapper a {		
		color: #33cabb;
		padding: 0 !important;
	}
	.navbar .dropdown-menu.form-wrapper a:hover{
		text-decoration: underline;
	}
	.navbar .form-wrapper .hint-text {
		text-align: center;
		margin-bottom: 15px;
		font-size: 13px;
	}
	.navbar .form-wrapper .social-btn .btn, .navbar .form-wrapper .social-btn .btn:hover {
		color: #fff;
        margin: 0;
		padding: 0 !important;
		font-size: 13px;
		border: none;
		transition: all 0.4s;
		text-align: center;
		line-height: 34px;
		width: 47%;
		text-decoration: none;
    }	
	.navbar .social-btn .btn-primary {
		background: #507cc0;
	}
	.navbar .social-btn .btn-primary:hover {
		background: #4676bd;
	}
	.navbar .social-btn .btn-info {
		background: #64ccf1;
	}
	.navbar .social-btn .btn-info:hover {
		background: #4ec7ef;
	}
	.navbar .social-btn .btn i {
		margin-right: 5px;
		font-size: 16px;
		position: relative;
		top: 2px;
	}
	.navbar .form-wrapper .form-footer {
		text-align: center;
		padding-top: 10px;
		font-size: 13px;
	}
	.navbar .form-wrapper .form-footer a:hover{
		text-decoration: underline;
	}
	.navbar .form-wrapper .checkbox-inline input {
		margin-top: 3px;
	}
	.or-seperator {
        margin-top: 32px;
		text-align: center;
		border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
		color: #666;
        padding: 0 8px;
		width: 30px;
		height: 30px;
		font-size: 13px;
		text-align: center;
		line-height: 26px;
		background: #fff;
		display: inline-block;
		border: 1px solid #e0e0e0;
		border-radius: 50%;
		position: relative;
		top: -15px;
		z-index: 1;
    }
    .navbar .checkbox-inline {
		font-size: 13px;
	}
	.navbar .navbar-right .dropdown-toggle::after {
		display: none;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 768px){
		.navbar .dropdown-menu.form-wrapper {
			width: 100%;
			padding: 10px 15px;
			background: transparent;
			border: none;
		}
		.navbar .form-inline {
			display: block;
		}
		.navbar .input-group {
			width: 100%;
		}
		.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
			display: block;
		}
	}
	/*<!---mohit -- >needed for hover to make it orange -->*/
	.dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color:#f5f5f5 ;
	}
	.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
    color: #262626;
    text-decoration: none;
    background-color: #ffb405ad;
	}
		/*for register button*/
	button[disabled], html input[disabled] 
	{
    cursor: default;
    background: orangered;
	}
	.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 1px solid transparent;
	/*<!---mohit -- >need to make margin-bottom =0 for better display-->*/
}
</style>
<script type="text/javascript">
	// Prevent dropdown menu from closing when click inside the form
	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
		e.stopPropagation();
	});
</script>
</head> 


<body >

<nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#">Edubuntu<b>initiative</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
		
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<ul class="nav navbar-nav">
			<li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="about.php" class="nav-link">About US</a></li>			
			<li class="nav-item dropdown">
				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#" onmouseover="this.click()" onmouseleave="this.click()">Computer Engineering <b ></b></a>
				<ul class="dropdown-menu">					
					<li><a href="#" class="dropdown-item">SE</a></li>
					<li><a href="#" class="dropdown-item">TE</a></li>
					<li><a href="#" class="dropdown-item">BE</a></li>
				</ul>
			</li>
			<li class="nav-item "><a href="/Edubuntu-Initiative/Login_v1/download.php" class="nav-link ">Download</a></li>
			<li class="nav-item"><a href="join_us.php" class="nav-link">Join Us</a></li>
			<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
		</ul>
		
	
		<ul class="nav navbar-nav navbar-right ml-auto">			
			<li class="nav-item">
				<a data-hover="dropdown" data-toggle="dropdown" class="nav-link dropdown-toggle active" href="#" id="login_button"  >Login</a>
				<ul class="dropdown-menu" id="login_button_dropdown">					
					<li><a href="/Edubuntu-Initiative/Login_v1/login_teacher.php" class="dropdown-item " >Teacher</a></li>
					<li><a href="/Edubuntu-Initiative/Login_v1/login_student.php" class="dropdown-item ">Student</a></li>
				</ul>

			<li class="nav-item">
				<a href="/Edubuntu-Initiative/Login_v1/register.php" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1" id="signup_button">Sign up</a>

			</li>
		</ul>
	</div>
</nav>

	<!--FOR CHANGING THE BUTTONS OF LOGIN AND SIGNUP AND MAKING THEM ACTIVE-->
		
		<script type="text/javascript">
						
						$('myselector').on('click',function(){  
    // handle click event, put money in my bank account  
}).on('mouseenter',function(){  
    $(this).trigger('click');  // only on enter here
    // handle hover mouse enter of hover event, put money in my bank account  
}).on('mouseleave',function(){  
    // handle mouse leave event of hover, put money in my bank account  
}).trigger('click');
						
						var change_button = function() 
						{
						{
							<!--change login button to email display-->
							document.getElementById('login_button').style.color = '#ff0606';
							document.getElementById('login_button').innerHTML = "<?php echo $_SESSION['email'];?>";
							document.getElementById('login_button_dropdown').style.display="none";
							<!--change signup button to signout-->
					
							document.getElementById('signup_button').innerHTML = "Sign out";
							document.getElementById('signup_button').href="/Edubuntu-Initiative/Login_v1/logout.php";
						}; 
						
						};
		</script>

		<?php 
		
		//if user is logged in then on every page 
		if(isset($_SESSION["email"]))
		{	
			//logged in
			// change login button to email id and signup to signout 	
			echo " <script type='text/javascript'> 	change_button();  </script > ";
			
		}
		
		//mark the current page as active in header 
		//https://stackoverflow.com/questions/10572735/javascript-getelement-by-href
		//https://stackoverflow.com/questions/33178114/using-queryselectorall-to-change-the-style-property-of-multiple-elements
		?>
		<!--for marking current page as active in header-->
		<script type="text/javascript" >
		var els = document.querySelectorAll("a[href$='<?php echo basename($_SERVER['PHP_SELF']);?>']");
		els[0].classList.add('active');
		</script>	
		
		
		<!--close the body and html tags -->
	</nav>