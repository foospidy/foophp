<?php
if(strlen(trim($HSTS)))                            { header($HSTS); }
if(strlen(trim($XFRAMEOPTIONS)))                   { header($XFRAMEOPTIONS); }
if(strlen(trim($XXSSPROTECTION)))                  { header($XXSSPROTECTION); }
if(strlen(trim($XCONTENTTYPEOPTIONS)))             { header($XCONTENTTYPEOPTIONS); }
if(strlen(trim($CONTENTSECURITYPOLICY)))           { header($CONTENTSECURITYPOLICY); }
if(strlen(trim($CONTENTSECURITYPOLICYREPORTONLY))) { header($CONTENTSECURITYPOLICYREPORTONLY); }
?>
