<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>BOOK_LIST</title>
</head>
<body>
 
  <form>
  <fieldset>
    <legend>소장도서 목록</legend>
   <?php
   include "sql_connect.php";
   include "sql_list.php";
   $db->close();
   ?>
  </fieldset>
  
  <br>
  <a href = "main.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>