<?php

session_start();

ob_start();

$base = "https://tsiserver.spreadshirt.com";


$ckfile = '/tsi/-cookie-'.session_id(); 


$cookiedomain = str_replace("http://www.","",$base);

$cookiedomain = str_replace("https://www.","",$cookiedomain);

$cookiedomain = str_replace("www.","",$cookiedomain);



$currenturl=$_SERVER['REQUEST_URI'];
$currenturl=str_replace('/store','',$currenturl);

$url = $base . $currenturl;



if($_SERVER['HTTPS'] == 'on'){

	$mydomain = 'https://'.$_SERVER['HTTP_HOST'];

} else {

	$mydomain = 'http://'.$_SERVER['HTTP_HOST'];

}

$curlSession = curl_init();

curl_setopt ($curlSession, CURLOPT_URL, $url);

curl_setopt ($curlSession, CURLOPT_HEADER, 1);


if($_SERVER['REQUEST_METHOD'] == 'POST'){

	curl_setopt ($curlSession, CURLOPT_POST, 1);

	curl_setopt ($curlSession, CURLOPT_POSTFIELDS, $_POST);

}

curl_setopt($curlSession, CURLOPT_RETURNTRANSFER,1);

curl_setopt($curlSession, CURLOPT_TIMEOUT,30);

curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 1);

curl_setopt ($curlSession, CURLOPT_COOKIEJAR, $ckfile); 

curl_setopt ($curlSession, CURLOPT_COOKIEFILE, $ckfile);


foreach($_COOKIE as $k=>$v){

	if(is_array($v)){

		$v = serialize($v);

	}

	curl_setopt($curlSession,CURLOPT_COOKIE,"$k=$v; domain=.$cookiedomain ; path=/");

}


$response = curl_exec ($curlSession);



// Check that a connection was made

if (curl_error($curlSession)){

        print curl_error($curlSession);

} else {


	$response = str_replace("HTTP/1.1 100 Continue\r\n\r\n","",$response);



	$ar = explode("\r\n\r\n", $response, 2); 

	$header = $ar[0];

	$body = $ar[1];


	$header_ar = split(chr(10),$header); 

	foreach($header_ar as $k=>$v){

		if(!preg_match("/^Transfer-Encoding/",$v)){

			$v = str_replace($base,$mydomain,$v);

			header(trim($v));

		}

	}

	$body = str_replace($base,$mydomain,$body);


	print $body;

}

curl_close ($curlSession);

?>