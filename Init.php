<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>KOREA LIBRARY</title>
</head>

<body>
<?php
//echo 'Hello!!';
$servername = getenv('localhost');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

//Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

//Check connection
if($db->connect_error)
{
    die("connection failed: " . $db->connect_error);
}
echo "Connected successfully (".$db->host_info.")";
$sql = "INSERT INTO dep (dept_no, dept_name)
VALUES (1, 'data1')";

if ($db->query($sql) === true){
    echo "New record created successfully";
}else{
    echo "error : " . $sql . "<br>". $db->error;
}
$db->close();
?>
    
<div style = "text-align:right;padding-top:5px;padding-right:5px">

<a href="Denied.html"> 건의사항 </a>  
&nbsp;
<a href="Denied.html"> 구입요청 </a> 
&nbsp;
<a href = "Denied.html"> 예약대출 </a>
&nbsp;
<a href = "Denied.html"> @BookList </a> 
&nbsp;
<a href="Login.html"> @Login </a> 
&nbsp;
<a href = "Register.html"> @Register </a> 
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