<?php
   include "sql_connect.php";
   $sql = "update User ";
   $sql .= "set user_id = '$Userid',user_pw='$Userpw',user_name='$Username',user_gender='$Usergender',user_job='$Userjob',user_interest='$Userinterest',user_etc='$Useretc',is_admin = 0, is_cookie= 0 ";
   $sql .= "where user_id = '$Userid'; ";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>