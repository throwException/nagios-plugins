<?php
$auth = $_POST["auth"];
$service = $_POST["service"];
$status = $_POST["status"];
$detail = $_POST["detail"];
$filename = "/var/www/report/" . $service;
$time = date("Y-m-d H:i:s");
$services = array(
	"backup-creation" => "secret"
);
if ($services[$service] == $auth) {
	$f = fopen($filename, "w") or die("Unable to open file!");
	fwrite($f, $time . "\n");
	fwrite($f, $status . "\n");
	fwrite($f, $detail);
	fclose($f);
	echo("Success");
} else {
	die('Unauthorized');
}	
?>
