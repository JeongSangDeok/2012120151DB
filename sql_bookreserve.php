<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $Usercall = $_POST['Usercall'];
   $Useremail = $_POST['Useremail'];
   $Bookname = $_POST['Bookname'];
   $Reserveddate = $_POST['Reserveddate'];
   $Reservedtime = $_POST['Reservedtime'];
   $sql = "insert into Book_reservation(user_id,user_call,user_email,book_name,reserved_date,reserved_time) ";
   $sql .= "values('$Userid', '$Usercall', '$Useremail', '$Bookname', '$Reserveddate', '$Reservedtime');";
   if ($db->query($sql) === true){
    echo "<h1>Book Reservation Success</h1><br>";
    echo "New record created successfully<br>";
    echo '<a href="main.php">To Main Page</a>'; 
   }else{
    echo "<h>No user or No book</h><br>";
    echo "error : " . $sql . "<br>". $db->error;
    echo '<br><a href="main.php">To Main Page</a>'; 
   }
   $db->close();
?>