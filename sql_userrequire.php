<?php
   include "sql_connect.php";
   $sql = "insert into User_requirement(user_id,user_content) ";
   $sql .= "values('$Userid', '$Usercontent'); ";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>