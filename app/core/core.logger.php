<?php
function log_event($event='NONE', $user=0, $message='No message provided?') {
	global $LOG_FILE, $LOG_TYPE;
	
	$date = date_create();
	
	error_log(date_format($date, 'Y-m-d H:i:s') . ' ' . $event . ' ' . $_SERVER['SERVER_ADDR'] . ' ' . $_SERVER['REMOTE_ADDR'] . ' ' . $user . ' ' . $message . "\n", $LOG_TYPE, $LOG_FILE);
}
?>
