<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>JOIN_LIST</title>
  </head>

  <body>
 
    <form>
      <fieldset>
        <legend>가입자 리스트</legend>
   <?php
   include "sql_connect.php";
   include "sql_userlist.php";
   $db->close();
   ?>
       </fieldset>  <br>
  <a href = "Admin_main.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>