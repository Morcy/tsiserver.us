
<?php
// display form if user has not clicked submit
if (!isset($_POST["message"])) {
  header("Location: contact?");
  die();
} else {    // the user has submitted the form
	$from = $_POST["email"]; // sender
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // send mail
    mail("katy@tsiserver.us",$subject,$message,"From: $from\n");
    header("Location: contact?a=1");
	die();
}