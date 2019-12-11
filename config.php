<?php

define('DB_SERVER', 'ec2-107-20-234-175.compute-1.amazonaws.com');
define('DB_USERNAME', 'xdfszvgmpbmmbk');
define('DB_PASSWORD', '3bb52121d663f43c8d00de0b3854911bd7573d93c09a5b5bd07c40ba22ccc48f');
define('DB_NAME', 'darcmi4aqt71fd');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
