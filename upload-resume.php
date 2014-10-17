<?php

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$boundary = md5(date('r', time()));

$headers .= "Organization: Nexsense" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
$headers .= "Content-type: multipart/mixed; boundary=\"NXS-$boundary\"";
$headers .= "X-Priority: 3" . "\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$headers .= "From: no-reply@nexsense.com" . "\r\n";
$headers .= "Reply-To: no-reply@nexsense.com" . "\r\n";

$emailto = 'jjenne@nexsense.com';
$subject = "Sales Rep Application from Nexsense.com";


$body = "NXS-$boundary\n";
$body .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\n\n";

// plain text section
$body .= "$boundary\n";
$body .= "Content-Type: text/plain; charset=\"iso-8859-1\"\n";
$body .= "Content-Transfer-Encoding: 7bit\n\n";

$body = "Hey Doug,\n\n";
$body .= "You've received another application from a sales rep candidate on Nexsense.com.\n\n";
$body .= "Name: " . $request->firstName . " " . $request->lastName . "\n";
$body .= "Email: " . $request->email . "\n";
$body .= "Phone: " . $request->phone . "\n";
$body .= "Zip Code: " . $request->zip . "\n";
$body .= "\n";

if (!empty($request->workHistory)) {
	$body .= "Previous home security experience:\n";
	for ($i=0; $i<count($request->workHistory); $i++) {
		$body .= "  Worked for " . $request->workHistory[$i]->company . " for " . $request->workHistory[$i]->yearsWorked . " years and sold " . $request->workHistory[$i]->annualSales . " accounts each year\n";
	}
	$body .= "\n";
}
else if (!empty($request->salesExperience)) {
	$body .= "This candidate has previous home security sales experience, but has listed some other experience as follows:\n";
	$body .= $request->salesExperience . "\n\n";
}

if (!empty($request->sellYourself)) {
	$body .= "Here's the candidate's 140-character pitch:\n";
	$body .= $request->sellYourself;
}


$body .= "\n\n$boundary\n";
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
$body .= "Content-Transfer-Encoding: 7bit\n\n";

// HTML version
$body = "Hey Doug,\n\n";
$body .= "You've received another application from a sales rep candidate on Nexsense.com.\n\n";
$body .= "Name: " . $request->firstName . " " . $request->lastName . "\n";
$body .= "Email: " . $request->email . "\n";
$body .= "Phone: " . $request->phone . "\n";
$body .= "Zip Code: " . $request->zip . "\n";
$body .= "\n";

if (!empty($request->workHistory)) {
	$body .= "Previous home security experience:\n";
	for ($i=0; $i<count($request->workHistory); $i++) {
		$body .= "  Worked for " . $request->workHistory[$i]->company . " for " . $request->workHistory[$i]->yearsWorked . " years and sold " . $request->workHistory[$i]->annualSales . " accounts each year\n";
	}
	$body .= "\n";
}
else if (!empty($request->salesExperience)) {
	$body .= "This candidate has previous home security sales experience, but has listed some other experience as follows:\n";
	$body .= $request->salesExperience . "\n\n";
}

if (!empty($request->sellYourself)) {
	$body .= "Here's the candidate's 140-character pitch:\n";
	$body .= $request->sellYourself;
}


$body .= "\n\n$boundary\n\n";

// attachment
if (!empty($request->resumeData)) {
	preg_match("/data:(.+);/", $request->resumeData, $matches);
	if (count($matches) > 1) {
		$contentType = $matches[1];
		$extension = substr($contentType, strpos($contentType, '/')+1);
		$attachment = chunk_split(substr($request->resumeData, strpos($request->resumeData, ';')+1));

		$body .= "NXS-$boundary\n";
		$body .= "Content-Type: $contentType; name=\"" . $request->firstName . $request->lastName . '-resume.' . $extension . "\"\n";
		$body .= "Content-Transfer-Encoding: base64\n\n";
		$body .= "Content-Disposition: attachment\n\n";

		$body .= $attachment;
	}
}

$body .= "\nNXS-$boundary\n\n";



//echo json_encode(array('email'=>$body));

try {
	// send email
	$success = mail($emailto, $subject, $body, $headers);

	if ($success)
		$response = array('status'=>1);
	else {
		$error = error_get_last();
		$response = array('status'=>0, 'message'=>"mail() didn't send: " . $error['message']);
	}
}
catch (Exception $ex) {
	$response = array('status'=>0, 'message'=>$ex);
}
echo json_encode($response);