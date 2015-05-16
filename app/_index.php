<?php
/// main app switch ///
switch($_GET['_action']) {
	/// app actions ///
	/// this is where you do your foo.
	/// add your application specific actions here.
	/// place files in the app/ directory.
	case 'example':
		foo('app.example.php');
		break;

	case 'example-parameters':
		foo('app.example-parameters.php');
		break;
	
	case 'example-authn':
		authn();
		foo('app.example-authn.php');
		break;

	/// end app actions ///

	/// core ///
	case 'csp-report':
		foo('core.csp-report.php', 'text/html', 'app/core');
		break;

	case 'login':
		foo('core.login.php', 'text/html', 'app/core');
		break;

	case 'forgot':
		foo('core.forgot.php', 'text/html', 'app/core');
		break;
	
	case 'logout':
		foo('core.logout.php', 'text/html', 'app/core');
		break;

	case 'register':
		foo('core.register.php', 'text/html', 'app/core');
		break;
	/// core end ///

	default:
		foo();
		break;
}
?>
