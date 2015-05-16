<?php
// path
$VERSION  = '0.0.0';
$ROOTDIR  = '';
$WEBROOT  = '';
$CACHEDIR = $ROOTDIR . 'static/cache';
$HEADER   = 'app.header.php';
$FOOTER   = 'app.footer.php';

// database
$DB_ENABLED      = false;	// true or false
$DB_HOST         = '';
$DB_NAME         = '';
$DB_USER         = '';
$DB_PASS         = '';
$ADODB_CACHE_DIR = $CACHEDIR;

// logging
$LOG_TYPE    = '3';
$LOG_FILE    = $ROOTDIR . 'static/log/app.log';
$LOG_EVENT   = 'EXCEPTION';	// default log event type
$LOG_MESSAGE = 'An exception has occured! Debug the exception and handle the error and add a better log message.';	// default log message

// security headers
// https://www.owasp.org/index.php/List_of_useful_HTTP_headers
// to disable a header set value to NULL (e.g. $HSTS = NULL;)
$HSTS                            = 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload';
$XFRAMEOPTIONS                   = 'X-Frame-Options: DENY';
$XXSSPROTECTION                  = 'X-XSS-Protection: 1; mode=block';
$XCONTENTTYPEOPTIONS             = 'X-Content-Type-Options: nosniff';
$CONTENTSECURITYPOLICY           = NULL; //'Content-Security-Policy: default-src \'self\'';
$CONTENTSECURITYPOLICYREPORTONLY = 'Content-Security-Policy-Report-Only: default-src \'self\'; report-uri /csp-report';

// custom variables

?>
