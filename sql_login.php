<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $Userpw = $_POST['Userpw'];
   $sql = "select * from User ";
   $sql .= "where user_id = '$Userid' and user_pw = '$Userpw'; ";
      $res = $db->query($sql); 
      //$row = $res->fetch_array(MYSQLI_ASSOC); 
      $row = mysqli_fetch_array($res);
      if ($row != null) { 
             echo '(Login Success)<br>'; 
             if($row[is_admin] == '1')
             {
             echo '<h1>Welcome Admistrator!!</h1>';
             echo '<form  method = "post" action = "Admin_main.php">'; 
             echo '<br><input type = "submit" value = "To Admin Page" /><br>';
             echo '# User ID : <input type = "text" id="userid" name ="Userid" value='.$row[user_id].' size="5"/> <br><br>';
             //echo '<a href="Admin_main.php">To Admin Page</a>'; 
             echo '</form>'; 
             }
             else
             {
             echo '<h1>Welcome User!!</h1><br>';
             echo '<form  method = "post" action = "main.php">'; 
             echo '<br><input type = "submit" value = "To main Page" /><br>';
             echo '# User ID : <input type = "text" id="userid" name ="Userid" value='.$row[user_id].' size="1"/> <br><br>';
             echo '</form>'; 
             //echo '<a href="main.php">To Main Page</a>'; 
             }
      } 
      if($row == null){ 
             echo 'Login Failed'; 
      } 
   
   $db->close();
?>