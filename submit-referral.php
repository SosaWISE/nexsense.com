<?php
try {
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);


	// Plain text email
	$headers .= "Organization: Nexsense" . "\r\n";
	$headers .= "Content-type: text/plain\r\n";
	$headers .= "From: no-reply@nexsense.com" . "\r\n";
	$headers .= "Reply-To: no-reply@nexsense.com" . "\r\n";

	$emailto = 'jjenne@nexsense.com; asosa@nexsense.com';
	$subject = "New referral from nexsense.com";


	$body = '';
	$body .= "Guess what!\r\n\r\n";
	$body .= "You've received an actual referral from nexsense.com!\r\n\r\n";
	$body .= "REFERRER:\r\n";

	if ($request->ref_customerId)
		$body .= "Customer ID: " . $request->ref_customerId . "\r\n";
	else {
		$body .= $request->ref_firstName . " " . $request->ref_lastName . "\r\n";
		$body .= $request->ref_address . "\r\n";
		if ($request->ref_address2)
			$body .= $request->ref_address2 . "\r\n";
		$body .= $request->ref_city . ', ' . $request->ref_state . ' ' . $request->ref_zip . "\r\n";
	}

	$body .= "\r\nREFERRED LEAD\r\n";
	$body .= $request->firstName . " " . $request->lastName . "\r\n";
	$body .= $request->address . "\r\n";
	if ($request->address2)
		$body .= $request->address2 . "\r\n";
	$body .= $request->city . ', ' . $request->state . ' ' . $request->zip . "\r\n\r\n";
	$body .= "Email: " . $request->email . "\r\n";
	$body .= "Phone: " . $request->phone . "\r\n";
	$body .= "\r\n";



	// send email
	$success = mail($emailto, $subject, $body, $headers);

	if ($success)
		$response = array('status'=>1, 'message'=>'mail successfully sent'/*, 'debug'=>$debugmsg*/);
	else {
		$error = error_get_last();
		$response = array('status'=>0, 'message'=>"mail() didn't send: " . $error['message']/*, 'debug'=>$debugmsg*/);
	}
}
catch (Exception $ex) {
	$response = array('status'=>0, 'message'=>$ex->getMessage());
}
echo json_encode($response);
