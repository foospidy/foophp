<?php
$json   = file_get_contents('php://input');
$object = json_decode($json);

if(NULL === $object) {
	$LOG_EVENT   = 'VALIDATE';
	$LOG_MESSAGE = 'Error decoding JSON.';
	foo('_exception.php');
	exit();
}
?>
