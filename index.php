<?php 					
	function getEmail (){

		if( isset($_POST['email']) )
		{
			$email = $_POST['email'];
		} else {
			$email = "no email";
		}
		
		return $email;
	}
	

?>
