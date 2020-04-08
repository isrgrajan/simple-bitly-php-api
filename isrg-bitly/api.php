<?php
/*
Author: Isrg Rajan
Website: www.isrgrajan.com
Help: www.isrgrajan.com
Version: 0.1
*/

function get_short_url($url, $token) {
	$long_url = $url;
	$apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
	$genericAccessToken = $token;
	$data = array(
		'long_url' => $long_url
	);
	$payload = json_encode($data);
	$header = array(
		'Authorization: Bearer ' . $genericAccessToken,
		'Content-Type: application/json',
		'Content-Length: ' . strlen($payload)
	);
	$ch = curl_init($apiv4);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	$result = curl_exec($ch);
	$resultToJson = json_decode($result);
	if (isset($resultToJson->link)) {
		return $resultToJson->link;
	}
	else {
		echo 'Not found';
	}
}
