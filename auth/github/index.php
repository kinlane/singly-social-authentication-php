<?php
session_start();

require_once "../../config.php";
require_once "../../libraries/singly-auth-class.php";

if(isset($_REQUEST['code']))
	{
		
	$_SESSION['Github_Code'] = $_REQUEST['code'];	
	
	// Authenticate with Singly
	$SinglyAuth = new SinglyAuthentication($SINGLY_CLIENT_ID,$SINGLY_CLIENT_SECRET);
	$SinglyAuthResults = $SinglyAuth->authenticate($_SESSION['Github_Code']);	

	// Might want to store these credentials somewhere other than the SESSI
	$_SESSION['Github_Access_Token'] = $SinglyAuthResults->access_token;
	$_SESSION['Github_Refresh_Token'] = $SinglyAuthResults->refresh_token;
	$_SESSION['Github_Account'] = $SinglyAuthResults->account;

	header ("Location: " . $SITE_URL);
		
	}
else
	{
	$error = $_REQUEST['error'];
	
	echo "Error = " . $error;
	}
?>