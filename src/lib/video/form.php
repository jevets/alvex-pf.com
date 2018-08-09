<?php

if( !isset( $HTTP_SERVER_VARS ) ) {
	$HTTP_SERVER_VARS = $_SERVER;
}
if( !isset( $HTTP_GET_VARS ) ) {
	$HTTP_GET_VARS = $_GET;
}
if( !isset( $HTTP_POST_VARS ) ) {
	$HTTP_POST_VARS = $_POST;
}
if( !isset( $HTTP_POST_FILES ) ) {
	$HTTP_POST_FILES = $_FILES;
}
function CleanStr($var) {
	$var = stripslashes($var);
	$var = strip_tags($var);
	return $var;
}
//---------------->"To" email address:
$to 			= "info@alvex-pf.com";

//----------------------------------------->These variable must match those in Flash
$fullname		= CleanStr($HTTP_POST_VARS['fullname']);
$email			= CleanStr($HTTP_POST_VARS['email']);
$phone			= CleanStr($HTTP_POST_VARS['phone']);

$subject 		= "Impact Movie - More Information Form Request";
$emailBody 		= "A visitor has watched your Impact Movie and would like more information\n\n";
//---------------->The message below should reflect appropriate variables above
	$emailBody	.= "Name: " . $fullname . "\n\n";
	$emailBody	.= "Email: " . $email . "\n\n";
	$emailBody	.= "Phone: " . $phone . "\n\n";

$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: Impact Movie <".$to.">";
if ($fullname == "avtesting"){
	$to = $email;
}
$toNameEmail	= "Sales <" . $to . ">";

$ok = mail($to, $subject, $emailBody, $headers);
if($ok){
	echo "retval=1";
}else{
	echo "retval=0";
}

?>