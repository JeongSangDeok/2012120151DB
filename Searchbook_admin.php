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
             echo '<td>'.$row[book_writer].'</td> ';
          echo '</tr>';
          echo '</table>';
          echo '<form  method = "post" action = "Book_description_admin.php">'; 
          echo '<br><input type = "submit" value = "Show Detail" /><br><br><br>';
          echo 'BOOK Name : <input type = "text" id="bookname" name ="Bookname" value='.$row[book_name].' size="1"/> <br><br>';
          echo '<a href="Admin_main.php">To Admin Page</a>'; 
          echo '</form>'; 
          
      } 
      if($row == null){ 
             echo '<H1>NOT EXISTING BOOK</h1><br>'; 
             echo '<a href="Admin_main.php">To Admin Page</a>'; 
      } 
   
   $db->close();
 ?>