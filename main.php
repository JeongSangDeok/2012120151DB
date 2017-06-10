<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <title>KOREA LIBRARY</title>
</head>

<body>
<div style = "text-align:right;padding-top:5px;padding-right:5px">

<a href="UserRequire.html"> 건의사항 </a>  
&nbsp;
<a href="BookRequire.html"> 구입요청 </a> 
&nbsp;
<a href = "BookReserve.html"> 예약대출 </a>
&nbsp;
<a href = "List.html"> @BookList </a> 
&nbsp;
<a href="User_info.html"> @User_info </a> 
&nbsp;

</div>
  <div style = "text-align:center;padding-top:15px">
    <image src = "mark.png"></image>
	<br>
    <span style = "font-size:30px">KoreaUniv Library</span>
	<br>
	<br>
  </div>
  <form>
  <fieldset>
    <legend>통합 검색</legend>
	<div style = "text-align:center">
    <label for = "bookname">도서명</label> : <input type = "text" id="bookname" name ="textt" size="25"/>
	  <input type = "submit" value = "검색" />
      <input type = "reset" value="지우기"/>
	<br>
    <label for = "searchrange">검색범위</label> : <input type = "radio" name="searching" id="searchrange" value="radio1" checked/>키워드
    <input type ="radio" name="searching" value="radio2"/>본문 내용
	<br>
    자료유형 : <input type="checkbox" name="datatype" value="all"/> 전체
           <input type = "checkbox" name ="datatype" value ="abook"/>단행본
           <input type = "checkbox" name ="datatype" value="academic"/>학술지
           <input type = "checkbox" name ="datatype" value= "nonebook"/>비도서
    <br>
	</div>
  </fieldset>
</form>
</body>

</html>