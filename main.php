<?php
echo 'Hello!!';

$servername = getenv('IP');
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
echo "Connected successfully (".$db->host_info.")";

$sql = "INSERT INTO dep (dept_no, dept_name)
VALUES (1, 'data1')";

if ($db->query($sql) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql . "<br>". $db->error;
}

$db->close();

?>