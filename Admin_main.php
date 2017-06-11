<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>KOREA LIBRARY</title>
</head>

<body>
 <div style = "text-align:right;padding-top:5px;padding-right:5px">
    <a href="main.php"> 일반사용자모드 </a> &nbsp;
    <a href="BookInsert.php"> 신규도서 입력 </a> &nbsp;
    <a href="Admin_join.php"> 예약자 정보보기 </a> &nbsp;
    <a href="PrintUser.php"> 가입자 명단 </a> &nbsp;
    <a href="Admin_delete.php"> 가입자 삭제 </a> &nbsp;
 </div>
 
 <div style = "text-align:center;padding-top:15px">
    <image src = "mark.png"></image> <br>
    <span style = "font-size:30px">KoreaUniv Library</span> <br>
    <span style = "font-size:20px">(관리자버전)</span> <br> <br>
 </div>
  
 <form method = "post" action = "Searchbook_admin.php">
    <fieldset>
       <legend>통합 검색</legend>
	     <div style = "text-align:center">
          <label for = "Bookname">도서명</label> : <input type = "text" id="bookname" name ="Bookname" size="25"/>
	        <input type = "submit" value = "검색" />
          <input type = "reset" value="지우기"/> <br>
          <label for = "searchrange">검색범위</label> : <input type = "radio" name="searching" id="searchrange" value="radio1" checked/>키워드
          <input type ="radio" name="searching" value="radio2"/>본문 내용 <br>
          자료유형 : <input type="checkbox" name="datatype" value="all"/> 전체
                     <input type = "checkbox" name ="datatype" value ="abook"/>단행본
                     <input type = "checkbox" name ="datatype" value="academic"/>학술지
                     <input type = "checkbox" name ="datatype" value= "nonebook"/>비도서 <br>
	     </div>
    </fieldset>
  </form>
</body>

</html>