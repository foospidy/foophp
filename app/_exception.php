<?php
if(!isset($GLOBALS['LOG_EVENT']))   { $GLOBALS['LOG_EVENT']   = 'EXCEPTION'; }
if(!isset($GLOBALS['LOG_MESSAGE'])) { $GLOBALS['LOG_MESSAGE'] = 'An exception has brought you here. Why do you think that is? What could this mean?'; }
if(!isset($GLOBALS['LOG_DISPLAY'])) { $GLOBALS['LOG_DISPLAY'] = 'html'; }

log_event($GLOBALS['LOG_EVENT'], $user->get_user_id(), $GLOBALS['LOG_MESSAGE']);

if('json' === $GLOBALS['LOG_DISPLAY']) {
	$dataObject = array('Exception'=>'This is the exception page.', 'Message'=>$GLOBALS['LOG_MESSAGE']);
	echo json_encode($dataObject);
} else {
	echo '<h2>This is the exception page.</h2>';
	echo '<p>' . $GLOBALS['LOG_MESSAGE'] . '</p>';
}
?>
