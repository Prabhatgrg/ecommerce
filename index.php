<?php

// Defining Constants
define('FRONTEND', '/' . basename(__DIR__) . '/frontend');
define('ABSPATH', '/' . basename(__DIR__));

// Includes Global Functions
require_once 'function.php';

// Includes Backend Index
require_once 'backend/index.php';

//Open Database Connection
$conn = open_con();
session_start();

require_once 'routes.php';

close_con($conn);
?>