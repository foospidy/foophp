<?php
/// for api kill header & footer
$GLOBALS['HEADER'] = '';
$GLOBALS['FOOTER'] = '';

/// main api switch ///
switch($_GET['_action']) {
	/// api actions ///
	/// this is where you do your foo.
	
	case 'example':
		foo('api.example.php', 'application/json');
		break;

	/// end api actions ///

	default:
		foo('api.version.php', 'application/json');
		break;
}
?>
