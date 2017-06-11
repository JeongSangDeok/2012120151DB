<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $Bookname = $_POST['Bookname'];
   $Bookpreference = $_POST['Bookpreference'];
   $Bookprice = $_POST['Bookprice'];
   $Booknum = $_POST['Booknum'];
   $sql = "insert into Book_required(user_id, book_name, book_preference, book_price, book_num) ";
   $sql .= "values('$Userid', '$Bookname', '$Bookpreference', '$Bookprice', '$Booknum');";
   if ($db->query($sql) === true){
    echo "<h1>Book requirement Success</h1><br> ";
    echo "New record created successfully<br>";
    echo '<a href="main.php">To Main Page</a>'; 
   }else{
    echo "<h> No id </h><br>";
    echo "error : " . $sql . "<br>". $db->error;
    echo '<br><a href="main.php">To Main Page</a>'; 
   }
   $db->close();
?>