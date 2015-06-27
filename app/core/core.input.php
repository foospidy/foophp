<?php
$keys = array_keys($_REQUEST);

for($i=0; $i<count($keys); $i++) {
	$directory = 'app/';

	if('_action' === $keys[$i] || '_api' === $keys[$i] || 'PHPSESSID' === $keys[$i]) {
		$directory = 'app/core/core.';
	}

	try {
		$file = $directory . 'validate.' . $keys[$i] . '.php';

		if(!@include_once($file)) {
			throw new Exception('Validation not defined for ' . htmlentities($keys[$i]));
		}

	} catch(Exception $e) {
		$LOG_EVENT   = 'VALIDATE';
		$LOG_MESSAGE = $e->getMessage();
		foo('_exception.php');
		exit();
	}
}

function validate_input($parameter, $method, $regex='/a-z/{1,2}/') { /// set a default regex. inentionally tight so go define you're regex!
	$value            = NULL;
	$supported_method = $method;

	switch($method) {
		case 'GET':
			$value = $_GET[$parameter];
			break;
		
		case 'POST':
			$value = $_POST[$parameter];
			break;

		case 'COOKIE':
			$value = $_COOKIE[$parameter];
			break;

		default:
			// leave $value NULL.
			$supported_method = 'Unknown';
			break;
	}

	// if $value is NULL then method must not be supported for this parameter.
	if(NULL === $value) { throw new Exception('Method not supported for parameter ' . htmlentities($parameter) . ', supported method(s) ' . htmlentities($supported_method)); }

	// perform validation based on the provided regex.
	if(isset($value)) {
		if(false === filter_var($value, FILTER_VALIDATE_REGEXP, array('options' => array('regexp' => $regex)))) {
				throw new Exception('Validation failed for ' . htmlentities($parameter));
		}
	} else {
		// log and trim parameter name to mitigate log forging.
		$LOG_EVENT   = 'VALIDATE';
		$LOG_MESSAGE = "The parameter '" . substr($parameter, 0, 50) . "' does not exist, so why am I being called?";
		foo('_exception.php');
		exit();
	}
}
?>
