<?php
session_start();

require_once "../../config.php";
require_once "../../libraries/singly-auth-class.php";

if(isset($_REQUEST['code']))
	{
		
	$_SESSION['Facebook_Code'] = $_REQUEST['code'];	
	
	// Authenticate with Singly
	$SinglyAuth = new SinglyAuthentication($SINGLY_CLIENT_ID,$SINGLY_CLIENT_SECRET);
	$SinglyAuthResults = $SinglyAuth->authenticate($_SESSION['Facebook_Code']);	

	// Might want to store these credentials somewhere other than the SESSION
	$_SESSION['Facebook_Access_Token'] = $SinglyAuthResults->access_token;
	$_SESSION['Facebook_Refresh_Token'] = $SinglyAuthResults->refresh_token;
	$_SESSION['Facebook_Account'] = $SinglyAuthResults->account;

	header ("Location: " . $SITE_URL);
		
	}
else
	{
	$error = $_REQUEST['error'];
	
	echo "Error = " . $error;
	}
?>