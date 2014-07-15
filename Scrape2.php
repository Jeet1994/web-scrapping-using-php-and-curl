<?php

error_reporting(E_ERROR); //ignoring any warnings


/*here is a php function used to get the html source from the webpage using cURL*/
function curlGet($url) {
	$ch = curl_init($url); //starting cURL
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //write the response to a variable
    curl_setopt($ch, CURLOPT_URL, $url);
    $results = curl_exec($ch);
    curl_close($ch);
	return $results;
}

$packtPage = curlGet('http://www.espncricinfo.com/');
//search for images
foreach($packtPage->find("img") as $element)
	echo $element->src . '<br>';

//find all links
foreach($packtPage->find("a") as $element)
echo $element->href . '<br>'; 
?>
