<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>USER INFO</title>
</head>

<body>
    <form  method = "post" action="sql_admindelete.php">
       <fieldset>
          <legend>회원 삭제</legend>
          ID : <input type="text" name="Userid" size="25" placeholder="ID입력"/>  <br>
          <input type ="submit" value="삭제" onclick="alert('삭제되었습니다.')"/>
          <input type ="reset" value="취소" /> <br> 
        </fieldset>
        <br>
        <a href = "Admin_main.php">뒤로 가기(BACK)</a>
  </form>
 
</body>

</html>