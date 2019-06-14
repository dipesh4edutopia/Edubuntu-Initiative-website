
<?php 
require_once('class.smtp.php');
require_once('class.phpmailer.php');

session_start(); // imp ! always place it in start 
//if user is already logged in means email is set in session hence direct him to download page


//https://stackoverflow.com/a/48653637/10704399

//----------------------------------------------
// Send an e-mail. Returns true if successful 
//
//   $to - destination
//   $nameto - destination name
//   $subject - e-mail subject
//   $message - HTML e-mail body
//   altmess - text alternative for HTML.
//----------------------------------------------
function sendmail($to,$nameto,$subject,$message,$altmess) 
{

  $from  = "yourcontact@yourdomain.com";
  $namefrom = "yourname";
  $mail = new PHPMailer();  
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();   // by SMTP
  $mail->SMTPAuth   = true;   // user and password
  $mail->Host       = "localhost";
  $mail->Port       = 25;
  $mail->Username   = $from;  
  $mail->Password   = "yourpassword";
  $mail->SMTPSecure = "";    // options: 'ssl', 'tls' , ''  
  $mail->setFrom($from,$namefrom);   // From (origin)
  $mail->addCC($from,$namefrom);      // There is also addBCC
  $mail->Subject  = $subject;
  $mail->AltBody  = $altmess;
  $mail->Body = $message;
  $mail->isHTML();   // Set HTML type
//$mail->addAttachment("attachment");  
  $mail->addAddress($to, $nameto);
  return $mail->send();
}

$thank_you=0;
if(isset($_REQUEST['name']) && isset($_REQUEST['msg']) && isset($_REQUEST['email']) )
{
	
	
	sendmail("feedback@yourdomain.com",$_REQUEST['email'].$_REQUEST['name'],"",$_REQUEST['msg'],"");
	$thank_you=1;
	
}




?>
<?php include('header.php'); ?>	

<!----    https://bootsnipp.com/snippets/7nmOW     ----->

<style>
body{
   
   background: linear-gradient(1000deg,#ff7a05eb, #ff5805);
}
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
	border-radius: 10px;
}
.contact-form .form-control{
    border-radius:1rem;
	border-radius: 10px;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 200px;
    width: 10%;
    margin-top: -5%;
    transform: rotate(0deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

</style>

<div class="container contact-form">
            <div class="contact-image">
                <img src="images/rlogowhite.png" alt="rocket_contact"/>
            </div>
            <form method="post" action="">
				<h3>
			<?php  if($thank_you==1) { echo "THANK YOU FOR YOUR FEEDBACK!";} else { echo "Drop Us a Message";}?>
                </h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <!--<div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>-->
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Your Message (SUGGESTIONS AND FEEDBACK ) *" style="width: 100%; height: 150px;"></textarea>
                        </div>
						<div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
						<!--TODO CHECK IF ALL INPUTS ARE VALID BEFORE SUBMIT--->
                    </div>
                </div>
            </form>
</div>