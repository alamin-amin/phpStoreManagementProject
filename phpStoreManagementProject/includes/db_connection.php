<?php
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php_storemanagement";

$con = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($con->connect_error) {
    die("");
}
?>