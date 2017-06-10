<?php
   include "sql_connect.php";
   $sql = "select book_name form Book "; 
   $sql .= "where book_name = '$Bookname');";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>