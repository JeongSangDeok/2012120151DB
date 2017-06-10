<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>BOOK_REQUIRE</title>
</head>
<body>
 
  <form action = "sql_bookrequire.php" onsubmit="return false" oninput="sum.value = parseInt(Bookprice.value) * parseInt(Booknum.value)">

  <fieldset>
    <legend>도서 구입 요청</legend>
   USER ID: <input type="text" name="Userid" size = "25"/> <br>
   도서명: <input type="text" name="Bookname" size = "25" list = "listid"/> <br>
   
   <datalist id = "listid"> 
   <option value = "Operating System" label="30,000"/>
   <option value="DataBase Concepts" label = " 34,000"/>
   <option value = "IT Tech" label="28,000"/>
   </datalist>

   선호도 : 1 <input type = "range" name = "Bookpreference" min="1" max="5" value="3"/> 5 <br>
   
   가격 : <input type = "number" name = "Bookprice" min = "1000" max="20000" step="1000" value="10000"/>
  <br>
   권수 : <input type = "number" name = "Booknum" min = "0" max = "10" step="1" value = "0"/>
  <br>
  합계 : <output name = "sum"> </output>
  <br>
  <br>
  <input type="submit" value = "제출"/> 
  <br>
  </fieldset>
  
  <br>
  <a href = "main.php">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>