<?php

set_include_path(get_include_path() . ':' . '.');
require_once('MailGun/Email.php');
use \MailGun\Email;

$bodyMail = '';
$subjectEmail = '';
$emailFrom = '';


if($_POST['mail'] == "booking"){

    	   $bookingBody = '<label>Name: </label>'.$_POST['booking_name'].'<br>'.
							'<label>Attending: </label>'.$_POST['booking_attending'].'<br>'.
							'<label>Pets: </label>'.$_POST['booking_pets'].'<br>'.
							'<label>Address: </label>'.$_POST['booking_address'].'<br>'.
							'<label>Indoor/ Outdoor: </label>'.$_POST['booking_inout'].'<br>'.
							'<label>Select Date: </label>'.$_POST['booking_fdate'].'<br>'.
							'<label>Start Date: </label>'.$_POST['booking_sdate'].'<br>'.
							'<label>Package: </label>'.$_POST['booking_dropDown'].'<br>'.
							'<label>Description: </label>'.$_POST['booking_textarea'].'<br>'.
							'<label>Phone: </label>'.$_POST['booking_phone'].'<br>'.
							'<label>Email: </label>'.$_POST['booking_email'].'<br>';

			$bodyMail = $bookingBody;
			$subjectEmail = 'Email from Event Booking Form';
			//$emailFrom = $_POST['booking_email'];

	}else if($_POST['mail'] == "school"){
			$schoolBody = '<label>School’s Name: </label>'.$_POST['school_name'].'<br>'.
							'<label>Age of Children: </label>'.$_POST['school_age'].'<br>'.
							'<label>Event Location: </label>'.$_POST['school_location'].'<br>'.
							'<label>Address: </label>'.$_POST['school_address'].'<br>'.
							'<label>Indoor/ Outdoor: </label>'.$_POST['school_inout'].'<br>'.
							'<label>Contact Details: </label>'.$_POST['school_contact'].'<br>'.
							'<label>Start Date: </label>'.$_POST['school_sdate'].'<br>'.
							'<label>Special Requirments: </label>'.$_POST['school_special'].'<br>'.
							'<label>Description: </label>'.$_POST['school_area1'].'<br>'.
							'<label>Description: </label>'.$_POST['school_area2'].'<br>'.
							'<label>Phone: </label>'.$_POST['school_phone'].'<br>'.
							'<label>Email: </label>'.$_POST['school_mail'].'<br>';

			$bodyMail = $schoolBody;
			$subjectEmail = 'Email - School Booking Form';

	 		//$emailFrom = $_POST['school_mail'];

	}else if($_POST['mail'] == "petParties"){

			echo $_POST['pet_dropDown'];

			$partiesBody = '<label>Name: </label>'.$_POST['pet_name'].'<br>'.
							'<label>People Attending: </label>'.$_POST['pet_attending'].'<br>'.
							'<label>Pets: </label>'.$_POST['pet_pets'].'<br>'.
							'<label>Address: </label>'.$_POST['pet_address'].'<br>'.
							'<label>Indoor/Outdoor: </label>'.$_POST['pet_inout'].'<br>'.
							'<label>Select Date: </label>'.$_POST['pet_sdate'].'<br>'.
							'<label>Start Date: </label>'.$_POST['pet_fdate'].'<br>'.
							'<label>Package: </label>'.$_POST['pet_dropDown'].'<br>'.
							'<label>Phone: </label>'.$_POST['pet_phone'].'<br>'.
							'<label>Email: </label>'.$_POST['pet_mail'].'<br>';


			$bodyMail = $partiesBody;
			$subjectEmail = 'Email - Petting From Parties';
			//$emailFrom = $_POST['pet_mail'];

	}else if($_POST['mail'] == "appointment"){
			$appointmentBody ='<label>Name: </label>'.$_POST['appointment_name'].'<br>'.
							'<label>Start Date: </label>'.$_POST['appointment_date'].'<br>'.
							'<label>Description: </label>'.$_POST['appointment_text'].'<br>'.
							'<label>Email: </label>'.$_POST['appointment_mail'].'<br>';

			$bodyMail = $appointmentBody;
			$subjectEmail = 'Email - Make an appointment';
			//$emailFrom = $_POST['appointment_mail'];

	}else if($_POST['mail'] == "modal"){
			$modalPettingBody = '<label>Name: </label>'.$_POST['modal_name'].'<br>'.
							'<label>People Attending: </label>'.$_POST['modal_attending'].'<br>'.
							'<label>Pets: </label>'.$_POST['modal_pets'].'<br>'.
							'<label>Address: </label>'.$_POST['modal_address'].'<br>'.
							'<label>Indoor/ Outdoor: </label>'.$_POST['modal_inout'].'<br>'.
							'<label>Select Date: </label>'.$_POST['modal_date1'].'<br>'.
							'<label>Start Date: </label>'.$_POST['modal_date2'].'<br>'.
							'<label>Select Package: </label>'.$_POST['modal_dropDown'].'<br>'.
							'<label>Animals we bring to school: </label>'.$_POST['modal_area1'].'<br>'.
							'<label>Face Painter: </label>'.$_POST['modal_area2'].'<br>'.
							'<label>Email: </label>'.$_POST['modal_mail'].'<br>';

			$bodyMail = $modalPettingBody;
			$subjectEmail = 'Email -  Booking Form Petting Form Parties';

	 		//$emailFrom = $_POST['school_mail'];
		}

		else if($_POST['mail'] == "dogBoarding"){
			$modalPettingBody = '<label>Name: </label>'.$_POST['dog_name'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['dog_gender'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['dog_neutred'].'<br>'.
							'<label>Breed: </label>'.$_POST['dog_breed'].'<br>'.
							'<label>Color: </label>'.$_POST['dog_color'].'<br>'.
							'<label>Name 2: </label>'.$_POST['dog_name1'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['dog_gender1'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['dog_neutred1'].'<br>'.
							'<label>Breed: </label>'.$_POST['dog_breed1'].'<br>'.
							'<label>Color: </label>'.$_POST['dog_color1'].'<br>'.
							'<label>Name 3: </label>'.$_POST['dog_name3'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['dog_gender3'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['dog_neutred3'].'<br>'.
							'<label>Breed: </label>'.$_POST['dog_breed3'].'<br>'.
							'<label>Color: </label>'.$_POST['dog_color3'].'<br>'.
							'<label>Arrival Date: </label>'.$_POST['dog_arival'].'<br>'.
							'<label>Telephone: </label>'.$_POST['dog_telephone'].'<br>'.
							'<label>Dept Date: </label>'.$_POST['dog_dept'].'<br>'.
							'<label>Moblie 1: </label>'.$_POST['dog_mobile1'].'<br>'.
							'<label>Owners Name: </label>'.$_POST['dog_owner'].'<br>'.
							'<label>Mobile 2: </label>'.$_POST['dog_mobile2'].'<br>'.
							'<label>Address: </label>'.$_POST['dog_address'].'<br>'.
							'<label>Emergency Contact Details: </label>'.$_POST['dog_emergency'].'<br>'.
							'<label>Vet: </label>'.$_POST['dog_vet'].'<br>'.
							'<label>Vet Tel: </label>'.$_POST['dog_vettel'].'<br>'.
							'<label>Medical History: </label>'.$_POST['dog_medical'].'<br>'.
							'<label>Collection Yes/No: </label>'.$_POST['dog_collection'].'<br>'.
							'<label>Delivery Yes/No: </label>'.$_POST['dog_delivery'].'<br>'.
							'<label>Name: </label>'.$_POST['dog_name4'].'<br>'.
							'<label>Package: </label>'.$_POST['dog_dropdown'].'<br>'.
							'<label>Email: </label>'.$_POST['dog_email'].'<br>';

			$bodyMail = $modalPettingBody;
			$subjectEmail = 'Email -  Dog Boarding Form';

	 		//$emailFrom = $_POST['school_mail'];
		}

		else if($_POST['mail'] == "catBoarding"){
			$modalPettingBody = '<label>Name: </label>'.$_POST['cat_name'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['cat_gender'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['cat_neutred'].'<br>'.
							'<label>Breed: </label>'.$_POST['cat_breed'].'<br>'.
							'<label>Color: </label>'.$_POST['cat_color'].'<br>'.
							'<label>Name 2: </label>'.$_POST['cat_name1'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['cat_gender1'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['cat_neutred1'].'<br>'.
							'<label>Breed: </label>'.$_POST['cat_breed1'].'<br>'.
							'<label>Color: </label>'.$_POST['cat_color1'].'<br>'.
							'<label>Name 3: </label>'.$_POST['cat_name3'].'<br>'.
							'<label>Male/Female: </label>'.$_POST['cat_gender3'].'<br>'.
							'<label>Neutred?: </label>'.$_POST['cat_neutred3'].'<br>'.
							'<label>Breed: </label>'.$_POST['cat_breed3'].'<br>'.
							'<label>Color: </label>'.$_POST['cat_color3'].'<br>'.
							'<label>Arrival Date: </label>'.$_POST['cat_arival'].'<br>'.
							'<label>Telephone: </label>'.$_POST['cat_telephone'].'<br>'.
							'<label>Dept Date: </label>'.$_POST['cat_dept'].'<br>'.
							'<label>Moblie 1: </label>'.$_POST['cat_mobile1'].'<br>'.
							'<label>Owners Name: </label>'.$_POST['cat_owner'].'<br>'.
							'<label>Mobile 2: </label>'.$_POST['cat_mobile2'].'<br>'.
							'<label>Address: </label>'.$_POST['cat_address'].'<br>'.
							'<label>Emergency Contact Details: </label>'.$_POST['cat_emergency'].'<br>'.
							'<label>Vet: </label>'.$_POST['cat_vet'].'<br>'.
							'<label>Vet Tel: </label>'.$_POST['cat_vettel'].'<br>'.
							'<label>Medical History: </label>'.$_POST['cat_medical'].'<br>'.
							'<label>Collection Yes/No: </label>'.$_POST['cat_collection'].'<br>'.
							'<label>Delivery Yes/No: </label>'.$_POST['cat_delivery'].'<br>'.
							'<label>Name": </label>'.$_POST['cat_name4'].'<br>'.
							'<label>Package: </label>'.$_POST['cat_dropdown'].'<br>'.
							'<label>Email: </label>'.$_POST['cat_email'].'<br>';

			$bodyMail = $modalPettingBody;
			$subjectEmail = 'Email -  Cat Boarding Form';

	 		//$emailFrom = $_POST['school_mail'];
		}

//Instantiate with your domain and key (no, that's not my real key)
$email = new Email('poshpawsdubai.com', 'key-7cfb4b53d8e17762fd2f82b95ed6ffd5');
//Populate the object
$response = $email->setFrom('postmaster@poshpawsdubai.com', 'Poshpaws Host')
    //->setReplyTo('blinizeka@gmail.com')
    ->addTo('fonixzeos@yahoo.com')
    ->setSubject($subjectEmail)
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