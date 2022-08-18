<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

if(isset($_POST ['submit-button'])){
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];

  $to='faithbusigu@airqo.net';
  $from=$email;
  $subject=$subject;
  $headers = "From: " . $from . "rn";
  $headers .= "Reply-To: ". strip_tags($from) . "rn";
  $headers .= "MIME-Version: 1.0rn";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1rn";
			
			
	$retval = mail ($to,$subject,$message,$headers);
  if($retval==true)
    {
    echo "Message sent";
    }
  else
    {
    echo "An error occured. Please try again!";
    }
}
?>
