<?php
try {
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);


	// Plain text email with attachment
	$boundary = 'NXS-'.md5(date('r', time()));

	$headers .= "Organization: Nexsense" . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
	$headers .= "From: no-reply@nexsense.com" . "\r\n";
	$headers .= "Reply-To: no-reply@nexsense.com" . "\r\n";

	$emailto = 'jjenne@nexsense.com';
	$subject = "Sales Rep Application from Nexsense.com";


	$body = '';

	// plain text section
	$body .= "--$boundary\r\n";
	$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
	$body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";

	$body .= "Hey Doug,\r\n\r\n";
	$body .= "You've received another application from a sales rep candidate on Nexsense.com.\r\n\r\n";
	$body .= "Name: " . $request->firstName . " " . $request->lastName . "\r\n";
	$body .= "Email: " . $request->email . "\r\n";
	$body .= "Phone: " . $request->phone . "\r\n";
	$body .= "Zip Code: " . $request->zip . "\r\n";
	$body .= "\r\n";

	if (!empty($request->salesExperience)) {
		$body .= "This candidate doesn't have previous home security sales experience, but has listed some other experience as follows:\r\n";
		$body .= $request->salesExperience . "\r\n\r\n";
	}

	if (!empty($request->workHistory) && !empty($request->workHistory[0]->company)) {
		$body .= "Previous home security experience:\r\n";
		for ($i=0; $i<count($request->workHistory); $i++) {
			$body .= " - Worked for " . $request->workHistory[$i]->company . " for " . $request->workHistory[$i]->yearsWorked . " years and sold " . $request->workHistory[$i]->annualSales . " accounts each year\r\n";
		}
		$body .= "\r\n";
	}

	if (!empty($request->sellYourself)) {
		$body .= "Here's the candidate's 140-character pitch:\r\n";
		$body .= $request->sellYourself . "\r\n\r\n";
	}


	// attachment
	if (!empty($request->resume)) {
		preg_match("/data:(.+);/", $request->resume, $matches);
		if (count($matches) > 1) {
			$contentType = $matches[1];
			$extension = substr($contentType, strpos($contentType, '/')+1);
			$attachment = chunk_split(substr($request->resume, strpos($request->resume, ';')+1));
			$filename = $request->firstName . $request->lastName . '-resume.' . $extension;

			$body .= "--$boundary\r\n";
			$body .= "Content-Type: $contentType; name=\"$filename\"\r\n";
			$body .= "Content-Description: $filename\r\n";
			$body .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
			$body .= "Content-Transfer-Encoding: base64\r\n\r\n";

			$body .= $attachment;
			$body .= "\r\n\r\n";
		}
	}

	$body .= "--$boundary--";

/*

	$headers .= "Organization: Nexsense" . "\r\n";
	$headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"\r\n";
	$headers .= "From: no-reply@nexsense.com" . "\r\n";
	$headers .= "Reply-To: no-reply@nexsense.com" . "\r\n";

	$emailto = 'jjenne@nexsense.com';
	$subject = "Sales Rep Application from Nexsense.com";


	$body = '';

	// plain text section
	$body .= "Hey Doug,\r\n\r\n";
	$body .= "You've received another application from a sales rep candidate on Nexsense.com.\r\n\r\n";
	$body .= "Name: " . $request->firstName . " " . $request->lastName . "\r\n";
	$body .= "Email: " . $request->email . "\r\n";
	$body .= "Phone: " . $request->phone . "\r\n";
	$body .= "Zip Code: " . $request->zip . "\r\n";
	$body .= "\r\n";

	if (!empty($request->salesExperience)) {
		$body .= "This candidate doesn't have previous home security sales experience, but has listed some other experience as follows:\r\n";
		$body .= $request->salesExperience . "\r\n\r\n";
	}

	if (!empty($request->workHistory) && !empty($request->workHistory[0]->company)) {
		$body .= "Previous home security experience:\r\n";
		for ($i=0; $i<count($request->workHistory); $i++) {
			$body .= " - Worked for " . $request->workHistory[$i]->company . " for " . $request->workHistory[$i]->yearsWorked . " years and sold " . $request->workHistory[$i]->annualSales . " accounts each year\r\n";
		}
		$body .= "\r\n";
	}

	if (!empty($request->sellYourself)) {
		$body .= "Here's the candidate's 140-character pitch:\r\n";
		$body .= $request->sellYourself . "\r\n\r\n";
	}


	// attachment
	if (!empty($request->resume)) {
		preg_match("/data:(.+);/", $request->resume, $matches);
		if (count($matches) > 1) {
			$contentType = $matches[1];
			$extension = substr($contentType, strpos($contentType, '/')+1);
			$attachment = substr($request->resume, strpos($request->resume, ';')+1);
			$filename = $request->firstName . $request->lastName . '-resume.' . $extension;



			$body .= "Download resume at http://www.nexsense.com/wp-content/uploads/sales/$filename";

			$body .= "\r\n\r\n";
		}
	}


*/






	// send email
	$success = mail($emailto, $subject, $body, $headers);

	if ($success)
		$response = array('status'=>1, 'message'=>'mail successfully sent');
	else {
		$error = error_get_last();
		$response = array('status'=>0, 'message'=>"mail() didn't send: " . $error['message']);
	}
}
catch (Exception $ex) {
	$response = array('status'=>0, 'message'=>$ex->getMessage());
}
echo json_encode($response);
