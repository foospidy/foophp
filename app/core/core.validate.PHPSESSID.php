<?php
/// set the parameter name.
$parameter = 'PHPSESSID';
/// set expected method for this parameter. options are 'GET', 'POST', or 'GET|POST'.
/// for cookies use 'COOKIE'
$method    = 'COOKIE';
/// set the regular expression to validate the parameter.
$regex     = '/^[a-z0-9]{1,33}$/';

////////////////////////////////////////////
validate_input($parameter, $method, $regex);
?>
