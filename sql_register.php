<?php
   include "sql_connect.php";
       
 $Userid = $_POST['Userid'];
 $Userpw= $_POST['Userpw'];
 $Username = $_POST['Username'];
 $Usergender = $_POST['Usergender'];
 $Userjob = $_POST['Userjob'];
 $Userinterest = $_POST['Userinterest'];
 $Useretc = $_POST['Useretc'];
 //'".$_POST['username']."'
   $sql = "insert into User(user_id, user_pw, user_name, user_gender, user_job, user_interest, user_etc, is_admin,is_cookie) ";
   $sql .= "values('$Userid','$Userpw','$Username','$Usergender','$Userjob','$Userinterest','$Useretc', 0, 0); ";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>