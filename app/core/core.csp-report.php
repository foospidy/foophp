<?php
$json       = file_get_contents('php://input');
$csp_report = json_decode($json);

if(NULL === $csp_report) {
	throw new Exception('CSP Report, error decoding json!');
}

/// silently log event (no need to return anything to the client).
log_event('VALIDATE', $user->get_user_id(), $json);
?>
