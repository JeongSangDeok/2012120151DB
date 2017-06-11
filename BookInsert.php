<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>BOOK_INSERT</title>
</head>
<body>
 
  <form method = "post" action = "sql_bookinsert.php" >

  <fieldset>
    <legend>신규 도서 입력</legend>
   도서명: <input type="text" name="Bookname" size = "25"/> <br>
   도서유형: <input type="text" name="Booktype" size = "25" list = "listid"/> <br>
   <datalist id = "listid"> 
   <option value = "commonbook" label="단행본"/>
   <option value="academic" label = " 학술지"/>
   <option value = "nonbook" label="비도서"/>
   </datalist>
   저자: <input type="text" name="Bookwriter" size = "25"/> <br>
   가격 : <input type = "number" name = "Bookprice" min = "1000" max="20000" step="1000" value="10000"/>
  <br>
   출판사: <input type="text" name="Bookwriter" size = "25" list = "list_publish"/> <br>
   <datalist id = "list_publish"> 
   <option value = "Apublisher" label="홍성사"/>
   <option value="Bpublisher" label = "두란노"/>
   <option value = "Cpublisher" label="한빛"/>
   </datalist>
   출간날짜 : <input type = "date" name ="Bookdate" min ="1999-10-02" max = "2020-10-02" value = "2016-04-17"/>
  <br>
   권수 : <input type = "number" name = "Booknum" min = "0" max = "10" step="1" value = "0"/>
  <br>
  <br>
  <input type="submit" value = "제출"/> 
  <br>
  </fieldset>
  
  <br>
  <a href = "Admin_main.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>