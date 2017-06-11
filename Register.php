<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>REGISTER</title>
</head>
<body>

  <form method = "post" action="sql_register.php">
  <fieldset>
    <legend>회원가입</legend>
  ID : <input type="text" name="Userid" size="25" placeholder="ID입력"/> 
  <br>
  PW : <input type ="password" size ="25" name ="Userpw" /> <br>
  <br>
  성명 : <input type="text" name="Username" size = "25" />
  <br>
  성별 : <input type ="radio" name = "Usergender" value="men"/>남성
        <input type ="radio" name="Usergender" value="woman"/>여성
  <br>
  직업 : <select name="Userjob" size="1">
          <option value ="students" selected>학생</option>
          <option value ="teacher">선생님</option>
          <option value = "professor">교수</option>
       </select>
  </p>
  @관심분야(복수 선택 가능)
  <br>
  분야: <input type="checkbox" name="Userinterest" value="computer"/>컴퓨터
       <input type="checkbox" name="Userinterest" value="economy"/>경제
       <input type="checkbox" name = "Userinterest" value="knowledge"/>상식
  <br>
  @비고:
   <br>
    <textarea name="Useretc" cols="40" rows="10">기타 상세 정보</textarea>
   <br>
   <hr>
   <input type ="submit" value="신청" onclick="alert('신청되었습니다.')"/>
   <input type ="reset" value="취소" />
  <br> 
  </fieldset>
  
  <br>
  <a href = "Init.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>