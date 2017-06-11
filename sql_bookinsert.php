<?php
   include "sql_connect.php";
   $Bookname = $_POST['Bookname'];
   $Booktype = $_POST['Booktype'];
   $Bookwriter = $_POST['Bookwriter'];
   $Bookprice = $_POST['Bookprice'];
   $Bookpublisher = $_POST['Bookpublisher'];
   $Bookdate = $_POST['Bookdate'];
   $Booknum = $_POST['Booknum'];
   $sql = "insert into Book(book_name, book_type, book_writer, book_price , book_publisher, book_date, book_num) ";
   $sql .= "values('$Bookname','$Booktype','$Bookwriter','$Bookprice','$Bookpublisher','$Bookdate','$Booknum'); ";
   if ($db->query($sql) === true){
    echo "<h1>Success</h1><br>";
    echo "New record created successfully<br>";
    echo '<a href="Admin_main.php">To Admin Page</a>'; 
   }else{
    echo "<h1>fail</h1><br>";
    echo "error : " . $sql . "<br>". $db->error;
    echo '<br><a href="Admin_main.php">To Admin Page</a>'; 
   }
   $db->close();
?>