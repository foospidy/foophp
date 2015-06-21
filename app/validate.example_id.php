<?php
/// set the parameter name.
$parameter = 'example_id';
/// set expected method for this parameter. options are 'GET', 'POST', 'PUT', 'DELETE'.
/// for cookies use 'COOKIE'.
$method    = 'GET';
/// set the regular expression to validate the parameter.
$regex     = '/^[a-z0-9]{1,25}$/';

////////////////////////////////////////////
validate_input($parameter, $method, $regex);
?>
