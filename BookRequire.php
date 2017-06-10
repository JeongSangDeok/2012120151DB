<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
<title>BOOK_REQUIRE</title>
</head>
<body>
 
  <form onsubmit="return false" oninput="sum.value = parseInt(su1.value) * parseInt(su2.value)">

  <fieldset>
    <legend>도서 구입 요청</legend>
   도서명: <input type="text" name="bookname" size = "25" list = "listid"/> <br>
   
   <datalist id = "listid"> 
   <option value = "Operating System" label="30,000"/>
   <option value="DataBase Concepts" label = " 34,000"/>
   <option value = "IT Tech" label="28,000"/>
   </datalist>

   선호도 : 1 <input type = "range" min="1" max="5" value="3"/> 5 <br>
   
   가격 : <input type = "number" name = "su1"min = "1000" max="20000" step="1000" value="10000"/>
  <br>
   권수 : <input type = "number" name = "su2" min = "0" max = "10" step="1" value = "0"/>
  <br>
  합계 : <output name = "sum"> </output>
  <br>
  <br>
  <input type="submit" value = "제출"/> 
  <br>
  </fieldset>
  
  <br>
  <a href = "main.html">뒤로 가기(BACK)</a>
	
  </form>
 
</body>

</html>