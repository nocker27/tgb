<?php
/*
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("tgb",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'lneven.dk.mysql';
$databaseName = 'lneven_dk_tgb';
$databaseUsername = 'lneven_dk_tgb';
$databasePassword = 'djc37rtt';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
echo "";

?>