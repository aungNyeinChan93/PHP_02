<?php


define("DD", realpath("."));
var_dump(DD);

require DD . "/vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('chan');
$log->pushHandler(new StreamHandler(DD . '/vendor/myLog/my_log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');