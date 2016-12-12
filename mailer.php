<?php

set_include_path(get_include_path() . ':' . '.');
require_once('MailGun/Email.php');
use \MailGun\Email;

$bodyMail = '';
$subjectEmail = 'Mail From ';



	
			$bodyMail =	'<label><b>Name: </b></label>'.$_POST['name'].'<br>'.
						'<label><b>Email: </b></label>'.$_POST['email'].'<br>'.
						'<label><b>Message: </b></label>'.$_POST['message'].'<br>';

			 
	

//Instantiate with your domain and key (no, that's not my real key)
	$email = new Email('horizondrone.ch', 'key-7cfb4b53d8e17762fd2f82b95ed6ffd5');
	//Populate the object
	$response = $email->setFrom('postmaster@horizondrone.ch', 'Horizon Host')
	    //->setReplyTo('blinizeka@gmail.com')
	    ->addTo('fonixzeos@yahoo.com')
	    ->setSubject($subjectEmail.$_POST['email'])
	    ->setHtml($bodyMail)
	    ->addTag('test emails')
	    ->setTestMode(false)
	    ->send();
	if ($response->getHttpCode() !== 200) {
	    throw new \Exception('Mail failed !');
	} else {
	    echo 'Email sent successfully';
	}

?>