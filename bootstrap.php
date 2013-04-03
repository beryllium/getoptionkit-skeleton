<?php

if (php_sapi_name() != 'cli') {
      die('Must run from command line');
}

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);
ini_set('log_errors', 0);
ini_set('html_errors', 0);

require_once __DIR__ . '/vendor/autoload.php';

function writeln( $msg = '' )
{
      echo $msg . "\n";
}
