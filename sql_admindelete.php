<?php
   include "sql_connect.php";
   $Userid = $_POST['Userid'];
   $sql = "delete from User ";
   $sql .= "where user_id = '$Userid'; ";
   if ($db->query($sql) === true){
    echo "<h1>Deletion complete!!</h1>";
    echo '<a href="Admin_main.php">To Admin Page</a>'; 
   }else{
    echo "<h1>FAILED : He has a book reservation Id</h1> <br> <br> description : <br>";
    echo "error : " . $sql . "<br>". $db->error;
    echo '<br><a href="Admin_main.php">To Admin Page</a>'; 
   }
   $db->close();
?>