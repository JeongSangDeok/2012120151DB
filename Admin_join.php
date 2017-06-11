<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
     <title>USER_LIST</title>
  </head>

  <body>
 
    <form>
      <fieldset>
        <legend>예약자 리스트</legend>
   <?php
   include "sql_connect.php";
   include "sql_adminjoin.php";
   $db->close();
   ?>
       </fieldset>  <br>
  <a href = "Admin_main.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>