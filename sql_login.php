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
             echo $id.'(Login Success)<br>'; 
             if($row[is_admin] == '1')
             {
             echo $id.'<h1>Welcome Admistrator!!</h1>';
             echo '<a href="Admin_main.php">To Admin Page</a>'; 
             }
             else
             {
             echo $id.'<h1>Welcome User!!</h1>';
             echo '<a href="main.php">To Main Page</a>'; 
             }
      } 
      if($row == null){ 
             echo 'Login Failed'; 
      } 
   
   $db->close();
?>