<?php
$servername = getenv('localhost');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;
//Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);
//Check connection
if($db->connect_error)
{
    die("connection failed: " . $db->connect_error);
}
?>