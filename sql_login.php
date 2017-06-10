<?php
   include "sql_connect.php";
   $sql = "select user_id,user_pw from User ";
   $sql .= "where user_id = '$Userid' and user_pw = '$Userpw'; ";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>