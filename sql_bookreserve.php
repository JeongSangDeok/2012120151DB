<?php
   include "sql_connect.php";
   $sql = "insert into Book_reservation(user_id,user_call,user_email,book_name,reserved_date,reserved_time) ";
   $sql .= "values('$Userid', '$Usercall', '$Useremail', '$Bookname', '$Reserveddate', '$Reservedtime');";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>