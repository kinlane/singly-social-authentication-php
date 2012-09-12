<?php
$Level = "";
require_once "header.php";

?>
<center>
<p align="center">You can authenticate using any of the social networks below.</p><br />
<div id="singly-auth-wrapper">
	<ul>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/facebook/&service=facebook" /><img title="Authenticate with Facebook" src="/images/facebook.png"></a></li>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/foursquare/&service=foursquare" /><img title="Authenticate with Foursquare" src="/images/foursquare.png"></a></li>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/github/&service=github" /><img title="Authenticate with Github" src="/images/github.png"></a></li>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/instagram/&service=instagram" /><img title="Authenticate with Instagram" src="/images/instagam.png"></a></li>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/linkedin/&service=linkedin" /><img title="Authenticate with LinkedIn" src="/images/linkedin.png"></a></li>
		<li><a href="https://api.singly.com/oauth/authorize?client_id=<?php echo $SINGLY_CLIENT_ID; ?>&redirect_uri=<?php echo $SITE_URL; ?>/auth/twitter/&service=twitter" /><img title="Authenticate with Twitter" src="/images/twitter.png"></a>
	</ul>
</div>
</center>

<?php 

//var_dump($_SESSION);

// Facebook Access Information
if(isset($_SESSION['Facebook_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>Facebook Access</strong></td>
		</tr>		
		<tr>
			<td align="right">Facebook Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Facebook_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Facebook Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Facebook_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Facebook Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['Facebook_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>		
	</table>
	<?php
	}
	
	
// Foursquare Access Information
if(isset($_SESSION['Foursquare_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>Foursquare Access</strong></td>
		</tr>		
		<tr>
			<td align="right">Foursquare Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Foursquare_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Foursquare Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Foursquare_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Foursquare Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['Foursquare_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>		
	</table>
	<?php
	}
	
// Gitub Access Information
if(isset($_SESSION['Github_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>Github Access</strong></td>
		</tr>		
		<tr>
			<td align="right">Github Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Github_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Github Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Github_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Github Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['Github_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>		
	</table>
	<?php
	}

// Instagram Access Information
if(isset($_SESSION['Instagram_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>Instagram Access</strong></td>
		</tr>		
		<tr>
			<td align="right">Instagram Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Instagram_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Instagram Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Instagram_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Instagram Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['Instagram_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>		
	</table>
	<?php
	}	
	
// LinkedIn Access Information
if(isset($_SESSION['LinkedIn_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>LinkedIn Access</strong></td>
		</tr>		
		<tr>
			<td align="right">LinkedIn Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['LinkedIn_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">LinkedIn Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['LinkedIn_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">LinkedIn Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['LinkedIn_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>		
	</table>
	<?php
	}	
	
// Twitter Access Information
if(isset($_SESSION['Twitter_Access_Token'])) {
	?>
	<br />
	<table align="center">	
		<tr>
			<td align="center" colspan="2"><strong>Twitter Access</strong></td>
		</tr>		
		<tr>
			<td align="right">Twitter Access Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Twitter_Access_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Twitter Refresh Token:</td>
			<td><input type="text" value="<?php echo $_SESSION['Twitter_Refresh_Token']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="right">Twitter Account:</td>
			<td><input type="text" value="<?php echo $_SESSION['Twitter_Account']; ?>" size="45" /></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><strong>You Now Have An Authenticated User</strong></td>
		</tr>
	</table>
	<?php
	}		
		
require_once "footer.php";
?>
					
