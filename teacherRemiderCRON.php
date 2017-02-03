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


//GET DATE
date_default_timezone_set('Africa/Nairobi');     
$datevariable = new DateTime();
$today = date_format($datevariable, 'Y-m-d');
$time = date_format($datevariable, 'H:i:s');


//GET DATA FIRST
$sql = "SELECT * FROM broadcasts WHERE classdate='$today' AND reminder='0'";
$res = $conn->query($sql);
while($row = $res->fetch_assoc())
{
	$teacheremail = $row['teacheremail'];
	$classdate = $row['classdate'];
	$reminder = $row['reminder'];
	$starttime = $row['starttime'];
	$endtime = $row['endtime'];
	$timezone = $row['timezone'];
	$starttimeInDB = $row['starttime'];
	$starttimeInDBlessAmOrPm = substr($starttimeInDB, 0, 5);
	$starttimeAMorPM = substr($starttimeInDB, 5, 2);


//CONVERT TO 24HR SYSTEM by adding 12hrs if it is PM

$starttimeInDBlessAmOrPm = $starttimeInDBlessAmOrPm.':00';

//convert to seconds
//class time to seconds
list($h, $m, $s) = explode(':', $starttimeInDBlessAmOrPm);//explode removes :
$seconds = ($h*3600)+($m*60)+$s;

$twelvehoursSECONDS = 12*3600;

if($starttimeAMorPM=="PM")
{
	$seconds = $seconds+$twelvehoursSECONDS;
}
else
{
	$seconds = $seconds;
}

//.....so far we have a 24hr clock system

//NEXT... subtract one hour from starttime in db, to get the time for email sending
$emailtimeInSeconds = $seconds-(60*60);//one hr

//get CURRENT TIME in seconds
list($h, $m, $s) = explode(':', $time);//explode removes :
$CURRENTTIMEseconds = ($h*3600)+($m*60)+$s;

/*
//seconds to time:
$h = floor($classtimeInSeconds/3600);
$m = floor(($classtimeInSeconds%3600)/60);
$s = $classtimeInSeconds-($h*3600)-($m*60);
*/

//IF STATEMENT
if(($emailtimeInSeconds<=$CURRENTTIMEseconds) && $classdate==$today && $reminder==0)
{
	//echo "SEND EMAIL to ".$teacheremail;
	
	$to=$teacheremail;
	$subject="BROADCAST SESSION REMINDER";
	$headers = "From <noreply@letslinklive.com>";
	$message="
	Hello,\n\nThis is a reminder of your UPCOMING session at $starttime $starttimeAMorPM $timezone. \n\nhttp://www.letslinklive.com \n\nKind Regards, \nLets Link Live Team
	";
	
	mail($to, $subject, $message, $headers);
	
	//UPDATE DATABASE AFTER SENDING EMAIL
	$sqlupdate = "UPDATE broadcasts SET reminder='1' WHERE teacheremail='$teacheremail' AND reminder='0' AND classdate='$today'";
	$result = $conn->query($sqlupdate);
}
else
{
	//echo "DONT SEND";
}


}
?>