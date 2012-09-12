<?php 
// Authenticate with Singly
//$SinglyAuth = new SinglyAuthentication($Singly_Client_ID,$Singly_Client_Secret);
//$SinglyAuthResults = $SinglyAuth->authenticate($Code);	

class SinglyAuthentication {
	
	private $Singly_Client_ID;
	private $Singly_Client_Secret;
	
	public function __construct($Singly_Client_ID,$Singly_Client_Secret) {
	 
		$this->Singly_Client_ID = $Singly_Client_ID;
		$this->Singly_Client_Secret = $Singly_Client_Secret;
	}

	public function __destruct() {
		//echo Destruction is Beautiful
	}

	// Singly Authentication
   	public function authenticate($Code)
   		{
   			
   		// Base Authentication URL
		$url = "https://api.singly.com/oauth/access_token";	 
		
		// Create an Array to POST
		$data = array(
		    'client_id' => $this->Singly_Client_ID,
		    'client_secret' => $this->Singly_Client_Secret,
		    'code' => $Code
		);	
		var_dump($data);
		// Setup curl
		$curl_handle = curl_init();  
		curl_setopt($curl_handle, CURLOPT_URL, $url);  
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($curl_handle, CURLOPT_POST, true);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $data);
		
		// Execute
		$output = curl_exec($curl_handle);
		$info = curl_getinfo($curl_handle);
		
		var_dump($output);
		
		// Create array from JSON
		$auth = json_decode($output);   
		
		return $auth;
   		}
}
?>