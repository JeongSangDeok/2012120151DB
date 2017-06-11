<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $Usercontent= $_POST['Usercontent'];
   $sql = "insert into User_requirement(user_id,user_content) ";
   $sql .= "values('$Userid', '$Usercontent'); ";
   if ($db->query($sql) === true){
    echo "<h1>Success</h1><br>";
    echo '<a href="main.php">To Main Page</a>'; 
   }else{
    echo "<h1>FAILED</h1><br>";
    echo "error : " . $sql . "<br>". $db->error;
    echo '<a href="main.php">To Main Page</a>'; 
   }
   $db->close();
?>