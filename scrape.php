<?php
error_reporting(E_ERROR);

//function to make get request using curl
function curlGet($url) {
	$ch = curl_init(); //starting cURL session 
	//setting cURL options
	curl_setopt($ch, CURL_RETURNRANSFER, true);
	curl_setopt($ch, CURLOPT_URL, $url);
	$results = curl_exec($ch); //executing the curl session
	curl_close($ch);//closing curl sesion
	return $results; //return the results
}

$packtPage = curlGet('http://www.espncricinfo.com/');

	echo $packtPage;
?>
