<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>USER_REQUIRE</title>
</head>

<body>
   <form  method = "post" action="sql_userrequire.php">
      <fieldset>
         <legend>건의사항</legend>
         NAME : <input type="text" name="Userid" size="25" placeholder="nick_name 입력"/> <br>
         요청사항 : <br>
         <textarea name = "Usercontent" cols ="50" rows="10"> 전달하실 내용을 적으세요: </textarea>
         <hr>
         <input type ="submit" value="제출" onclick="alert('신청되었습니다.')"/>
         <input type ="reset" value="취소" /> <br> 
      </fieldset>
      <br>
      <a href = "main.php">뒤로 가기(BACK)</a>
  </form>
 
</body>

</html>