<?php
if($_POST)
{
	$to_Email   	= "informes@dmark.pro";
	$subject        = 'Mensaje de la web';
	
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userMessage"]) || !isset($_POST["userPhone"]) || !isset($_POST["country"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
	$country = filter_var($_POST["country"], FILTER_SANITIZE_STRING);
	$user_phone    = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);

	$user_Message = str_replace("\&#39;", "'", $user_Message);
	$user_Message = str_replace("&#39;", "'", $user_Message);
	
	//additional php validation
	if(strlen($user_Name)<2) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Tu nombre es muy corto'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Por favor ingresa un email válido'));
		die($output);
	}
	if(strlen($user_Message)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Tú mensaje es muy corto'));
		die($output);
	}
	if(strlen($user_phone)<7) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Ingresa un número válido'));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$sentMail = @mail($to_Email, $subject, $user_Message . "\r\n\n"  .'-- '.$user_Name. "\r\n" .'-- '.$user_Email . "\r\n\n"  .'-- '.$user_phone  , $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{

		if($user_Name=='Directo'){
			$output = json_encode(array('type'=>'message', 'text' => 'Hola, nos comunicaremos con usted a la brevedad'));
		}

		else {
			$output = json_encode(array('type'=>'message', 'text' => 'Gracias por escribirnos :), responderemos tu mensaje a la brevedad'));
		}

		die($output);
	}
}
?>