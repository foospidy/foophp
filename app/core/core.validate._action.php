<?php
/// set the parameter name.
$parameter = '_action';
/// set expected method for this parameter. options are 'GET', 'POST', or 'GET|POST'.
/// for cookies use 'COOKIE'.
$method    = 'GET';
/// set the regular expression to validate the parameter.
$regex     = '/^[a-z0-9-]{1,25}$/';

////////////////////////////////////////////
validate_input($parameter, $method, $regex);
?>
