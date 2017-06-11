<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $Userpw= $_POST['Userpw'];
   $Username = $_POST['Username'];
   $Usergender = $_POST['Usergender'];
   $Userjob = $_POST['Userjob'];
   $Userinterest = $_POST['Userinterest'];
   $Useretc = $_POST['Useretc'];
   $sql = "update User ";
   $sql .= "set user_id = '$Userid', user_pw='$Userpw',user_name='$Username',user_gender='$Usergender',user_job='$Userjob',user_interest='$Userinterest',user_etc='$Useretc',is_admin = 0, is_cookie= 0 ";
   $sql .= "where user_id = '$Userid'; ";
   if ($db->query($sql) === true){
    echo "Update complete!!<br>";
    echo "New record created successfully<br>";
    echo '<a href="main.php">To Main Page</a>'; 
   }else{
    echo "<h1>FAILED</h1><br>";
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>