<?php
   include "sql_connect.php";
   $Bookname = $_POST['Bookname'];
   $sql = "select * from Book ";
   $sql .= "where book_name = '$Bookname'";
      $res = $db->query($sql); 
      $row = $res->fetch_array(MYSQLI_ASSOC); 
      if ($row != null) { 
          echo '<table border = "1" >';
          echo '<tr>';
             echo '<td>'.$row[book_name].'</td> ';
             echo '<td>'.$row[book_type].'</td> ';
             echo '<td>'.$row[book_writer].'</td> ';
             echo '<td>'.$row[book_price].'</td> ';
             echo '<td>'.$row[book_publisher].'</td> ';
             echo '<td>'.$row[book_date].'</td> ';
             echo '<td>'.$row[book_num].'</td> ';
          echo '</tr>';
          echo '</table>';
          echo '<a href="Admin_main.php">To Admin Page</a>'; 
      } 
      if($row == null){ 
             echo 'NOT EXIST'; 
      } 
   
   $db->close();
 ?>