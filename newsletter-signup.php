<?php
	date_default_timezone_set("GMT");
	$signup_time = date("Y-m-d H:i:s", time());

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$email = $request->email;

	$data = array(
		'apikey'=>'5506cdfa4a256f458f7819993582e056-us9',
		'id'=>'a5d497b3a1',
		'email'=>array('email'=>$email),
		'double_optin'=>FALSE,
		'merge_vars'=>array(
			'optin_ip'=>$_SERVER['REMOTE_ADDR'],
			'optin_time'=>$signup_time,
		),
	);

	//$url = 'https://us9.api.mailchimp.com/2.0/lists/list.json';
	$url = 'https://us9.api.mailchimp.com/2.0/lists/subscribe.json';
	$json = json_encode($data);

	// curl to mailchimp
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

	if ($response)
		echo json_encode(array('result'=>'success'));
	else
		echo json_encode(array('result'=>'failure', 'error'=>curl_error($ch)));

	curl_close($ch);
