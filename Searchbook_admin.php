<?php
   include "sql_connect.php";
   $Bookname = $_POST['Bookname'];
   $Userid = $_POST['Userid'];
   $sql_cookie = "insert into User_cookie(user_id,lastest_search) ";
   $sql_cookie .= "values('$Userid', '$Bookname'); ";
      $sql_update  = "update User_cookie ";
   $sql_update .= "set lastest_search = '$Bookname' ";
   $sql_update .= "where user_id = '$Userid'; ";
   if ($db->query($sql_cookie) === true){
    echo "<h3>Cookie_Saved</h3><br>"; 
   }else{
       if ($db->query($sql_update) === true) echo "<h3>Cookie_Success</h3><br>"; 
       else  echo "<h3>Cookie_FAILED</h3><br>";
   }
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