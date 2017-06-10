<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>BOOK_RESERVE</title>
</head>
<body>
 
  <form>
  <fieldset>
    <legend>도서 예약 대출</legend>
  <br>
  성명: <input type ="text" name = "name" size = "25" required />
  <br>
  전화: <input type = "tel" name = "tel" placeholder = "00*-000*-0000" pattern="[0-9]{2,3}-[0-9]{3,4}-[0-9]{4}"/>
  <br>
  이메일 : <input type = "email" name ="mail" placeholder = "***@***.***"/>
  <br>
  <br>
  도서명 : <input type = "text" name="bookname2" size = "40"/>
  <br>
  예약 희망일 : <input type = "date" min ="1999-10-02" max = "2020-10-02" value = "2016-04-17"/>
  <br>
  수령 시간 : <input type = "time" min="09:00:00" max="18:00:00" value="12:00:00"/> 에서 
           <input type = "time" min="09:00:00" max = "18:00:00" value ="15:00:00"/>사이
  <br>
  <br>
  <hr>
  <input type="submit" value="예약하기"/>
  <br>  
  </fieldset>
  
  <br>
  <a href = "main.html">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>