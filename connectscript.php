<?php
$host = "localhost";
$user = 'root';
$pass = '';
$dbTARGET = 'sidequestdb';

$db = new mysqli('localhost', $user, $pass, $dbTARGET);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}else{
    echo("Connection Successful!");
}
?>