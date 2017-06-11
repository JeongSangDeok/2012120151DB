<?php
   include "sql_connect.php";
   $sql = "insert into Book_required(user_id, book_name, book_preference, book_price, book_num) ";
   $sql .= "values('$Userid', '$Bookname', '$Bookpreference', '$Bookprice', '$Booknum');";
   if ($db->query($sql) === true){
    echo "New record created successfully";
   }else{
    echo "error : " . $sql . "<br>". $db->error;
   }
   $db->close();
?>