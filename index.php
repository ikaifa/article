<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

//date_default_timezone_set('Asia/Phnom_Penh');

require 'config.php';
require 'util/Auth.php';
require 'util/Functions.php';

require 'util/HomeCtrl.php';
require 'util/DashCtrl.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    require LIBS . $class . ".php";
}

// Load the Bootstrap!
$bootstrap = new Bootstrap();

$bootstrap->init();
