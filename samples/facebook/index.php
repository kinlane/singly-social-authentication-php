<?php
$Level = "../../";

require_once "../../libraries/singly-facebook-class.php";

require_once $Level . "header.php";

if(isset($_REQUEST['s']))
	{
	$DisplayService = $_REQUEST['s'];
	$DisplayService2 = $_REQUEST['ds'];
	}
else
	{
	$DisplayService = "";
	$DisplayService2 = "Facebook Service";
	}
	
$SinglyFacebook = new SinglyAuthentication($SINGLY_CLIENT_ID,$SINGLY_CLIENT_SECRET,$_SESSION['Facebook_Code'],$_SESSION['Facebook_Access_Token'],$_SESSION['Facebook_Refresh_Token'],$_SESSION['Facebook_Account']);				
?>

<table cellpadding="5" cellspacing="5" align="center" border="0">
	<tr>
		<td align="center">	
			<img src="http://kinlane-productions.s3.amazonaws.com/singly/icons/facebook.png">
		</td>
	</tr>
	<tr>
		<td>
			<p align="center"><strong><?php echo $DisplayService2; ?></strong></p>
			<?php	
			
			if($DisplayService=='friends')
				{
					
				// Pull friends results
				$SinglyFacebookResults = $SinglyFacebook->pullService($DisplayService);
				?>
				<ul>
				<?php
				foreach($SinglyFacebookResults as $Friend)
					{
					?>
					<li><a href="<?php echo $Friend->data->link; ?>" target="_blank"><?php echo $Friend->data->name; ?></a>
					<?php
					}
					?>
				</ul>
				<p align="center"><a href="index.php">Return to Main Page</a></p>
				<?php
				
				}
			elseif($DisplayService=='feed')
				{
				// Pull friends results
				$SinglyFacebookResults = $SinglyFacebook->pullService($DisplayService);
				//var_dump($SinglyFacebookResults);
				?>
				<ul>
				<?php
				foreach($SinglyFacebookResults as $Feed)
					{
					//var_dump($Feed);	
					?>
					<li>
						<a href="<?php echo $Feed->data->link; ?>" target="_blank">
							<?php 
							if(isset($Feed->data->story)) 
								{
								echo $Feed->data->story;
								} 
							else if(isset($Feed->data->message)) 
								{
								echo $Feed->data->message;
								} 
							else 
								{
								echo $Feed->data->name;
								} 
							?>
						</a>
					</li>
					<?php
					}
					?>
				</ul>
				<p align="center"><a href="index.php">Return to Main Page</a></p>
				<?php				
				}
			elseif($DisplayService=='home_photos')
				{
				// Pull friends results
				$SinglyFacebookResults = $SinglyFacebook->pullService($DisplayService);
				//var_dump($SinglyFacebookResults);
				?>
				<ul>
				<?php
				foreach($SinglyFacebookResults as $HomePhotos)
					{
					//var_dump($HomePhotos);	
					?>
					<a href="<?php echo $HomePhotos->data->link;?>">
						<img src="<?php echo $HomePhotos->data->picture;?>" />
					</a><br />
					<?php
					}
					?>
				</ul>
				<p align="center"><a href="index.php">Return to Main Page</a></p>
				<?php				
				}	
			elseif($DisplayService=='home')
				{
				// Pull friends results
				$SinglyFacebookResults = $SinglyFacebook->pullService($DisplayService);
				//var_dump($SinglyFacebookResults);
				?>
				<ul>
				<?php
				foreach($SinglyFacebookResults as $Home)
					{
					//var_dump($Home);	
					?>
					<li>
						<a href="<?php echo $Home->data->link; ?>" target="_blank">
							<?php 
							if(isset($Home->data->story)) 
								{
								echo $Home->data->story;
								} 
							else if(isset($Home->data->message)) 
								{
								echo $Home->data->message;
								} 
							else 
								{
								echo $Home->data->name;
								} 
							?>
						</a>
					</li>
					<?php
					}
					?>
				</ul>
				<p align="center"><a href="index.php">Return to Main Page</a></p>
				<?php				
				}
			elseif($DisplayService=='albums')
				{
				// Pull friends results
				$SinglyFacebookResults = $SinglyFacebook->pullService($DisplayService);
				//var_dump($SinglyFacebookResults);
				?>
				<ul>
				<?php
				foreach($SinglyFacebookResults as $Albums)
					{
					//var_dump($Albums);	
					?>
					<li>
					<a href="<?php echo $Albums->data->link;?>">
						<?php echo $Albums->data->name;?>
					</a>
					</li>
					<?php
					}
					?>
				</ul>
				<p align="center"><a href="index.php">Return to Main Page</a></p>
				<?php				
				}				
			else
				{
				// Facebook with Singly
				$SinglyFacebookServicesResults = $SinglyFacebook->services();	
				?>
				<table cellpadding="5" border="0">
				<?php
				//var_dump($SinglyFacebookServicesResults);
				foreach($SinglyFacebookServicesResults as $Service => $Value)
					{
					$Display_Service = ucwords(str_replace("_"," ",$Service));	
					?>
					<tr>
						<td><?php echo $Display_Service; ?> (<?php echo $Value; ?>)</td>
						<td><a href="index.php?s=<?php echo $Service; ?>&ds=<?php echo $Display_Service; ?>">View Results</a></td>
					</tr>
					<?php
					//echo $Display_Service . "(" . $Service . ") = " . $Value . "<br />";
					}
					?>
				</table>
				<?php
				}
			?>
		</td>
	</tr>
</table>

<?php
require_once $Level . "footer.php";
?>
					
