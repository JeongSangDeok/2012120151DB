<?php
$sql0 = "DROP TABLE User";
$sql1 = "DROP TABLE Book";
$sql2 = "DROP TABLE Administrator";
$sql3 = "DROP TABLE Book_reservation";
$sql4 = "DROP TABLE User_requirement";
$sql5 = "DROP TABLE Book_required";
$sql6 = "DROP TABLE User_cookie";
if ($db->query($sql0) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql0 . "<br>". $db->error;
}
if ($db->query($sql1) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql1 . "<br>". $db->error;
}
if ($db->query($sql2) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql2 . "<br>". $db->error;
}
if ($db->query($sql3) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql3 . "<br>". $db->error;
}
if ($db->query($sql4) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql4 . "<br>". $db->error;
}
if ($db->query($sql5) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql5 . "<br>". $db->error;
}

if ($db->query($sql6) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql6 . "<br>". $db->error;
}
?>