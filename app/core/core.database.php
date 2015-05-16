<?php
if($DB_ENABLED) {
	try {
		$db = NewADOConnection('mysql');
		$db->Connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	
	} catch(Exception $e) {
		$LOG_EVENT   = 'DATABASE';
		$LOG_MESSAGE = $e->getMessage();
		foo('_exception.php');
		exit();
	}
}
?>
