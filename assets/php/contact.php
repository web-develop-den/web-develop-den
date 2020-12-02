<?php

if(isset($_POST['message'])){

	$name = $_POST['c_name'];
	$email = $_POST['c_email'];
	$message = $_POST['c_message'];
    
	
	$to      = 'dlev5667@gmail.com';
	$subject = 'Site Contact Form';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Подання форми успішне';
    }
	else{
		$res['message'] = 'Не вдалося надіслати пошту. Будь ласка, напишіть мені на dlev5667@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>