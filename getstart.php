<?php
// This MUST be set before the autoload because the XBRL class autoloaded uses it
global $use_xbrl_functions; $use_xbrl_functions = true;
require_once __DIR__ . '/vendor/autoload.php';
include __DIR__ . "/vendor/lyquidity/xbrl/examples/examples-single.php";