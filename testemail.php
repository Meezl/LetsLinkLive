<?php
$hostname="localhost";
$username="letslink_lll";
$password="letslinklive...";
$db="letslink_letslinklive";

$conn=new mysqli($hostname,$username,$password,$db);

if ($conn->connect_error)
{
	die("Can not connect to the database".$conn->connect_error);
}

$choose_db=$conn->select_db($db);

//error handler function
function Errors($errno, $errstr)
{
	error_log("Error: [$errno] $errstr",1,
	"noexist@gmail.com","From: localhost"); //sends error msg to the email
}
//set error handler
set_error_handler("Errors",E_NOTICE); //E_NOTICE...This is an error type

$to="duncodi@gmail.com";
	$subject="BROADCAST SESSION REMINDER";
	$headers = "From <noreply@letslinklive.com>";
	$message="
	Hello,  \n\n
	This is a reminder that you have an UPCOMING session at $starttime $starttimeAMorPM. \n\n
	http://www.letslinklive.com/blablabla
	Kind Regards \n
	Lets Link Live Team
	";
	
	mail($to, $subject, $message, $headers);

?>