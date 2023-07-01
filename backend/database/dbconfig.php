<?php

// Database Config
define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBNAME', 'ecommerce');

// Database Connection Function

// Create Connection
function open_con(){
    $conn = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
    if(!$conn){
        die("Connection Error: " . $conn->connect_error);
    }else{
        echo "Success";
    }
    return $conn;
}

// Close Connection
function close_con($conn){
    $conn->close();
}

?>