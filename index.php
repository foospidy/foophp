<?php
/// require these things ///
require('app/_config.php');				/// application configuration
//require('app/vendor/autoload.php');	  /// vendor (third-party) packages
require('app/core/core.session.php');	/// session class

$user = new session();					/// create a session

require('app/core/core.logger.php');	/// logger for application logging
require('app/core/core.headers.php');	/// http security headers
require('app/core/core.input.php');		/// enforce input validation
require('app/core/core.database.php');	/// database connection

try {
	if(!isset($_GET['_api'])) { $_GET['_api'] = false; }

	if('true' === $_GET['_api']) {
		include('app/_api.php');
	} else {
		include('app/_index.php');
	}
} catch(Exception $e) {
	$GLOBALS['LOG_EVENT']   = 'EXCEPTION';
	$GLOBALS['LOG_MESSAGE'] = 'Un-handled exception: ' . $e->getMessage();
	foo('_exception.php');
	exit();
}

function foo($file='index.html', $content_type='text/html', $directory='app') {
	// content types:
	// - text/html for html
	// - plain/txt for plain text
	// - text/xml for conformance with RFC2046
	// - application/xml for dcoument specified character encoding
	// - application/json for JSON
	// - application/javascript for JSONP with callback
	global $user, $db, $WEBROOT, $ROOTDIR, $VERSION, $LOG_EVENT, $LOG_MESSAGE;
	
	if('index.html' === $file)  { $directory = '.'; }

	header('Content-type: ' . $content_type);
	
	if(strlen($GLOBALS['HEADER'])) {
		include('app/' . $GLOBALS['HEADER']);
	}
	include($directory . '/' . $file);
	
	if(strlen($GLOBALS['FOOTER'])) {
		include('app/' . $GLOBALS['FOOTER']);
	}
}

/// call to enforce authentication
function authn() {
	if(0 === $GLOBALS['user']->get_user_id()) {
		$GLOBALS['LOG_EVENT']   = 'AUTHN';
		$GLOBALS['LOG_MESSAGE'] = 'Access denied.';
		foo('_exception.php');
		exit();
	}
}

/// call to check if user is authenticated
function isauthn() {
	$isauthn = 0;

	if($GLOBALS['user']->get_user_id()>0) {
		$isauthn = 1;
	}

	return $isauthn;
}
?>
