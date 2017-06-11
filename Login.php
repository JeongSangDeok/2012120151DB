<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
</head>

<body>

    <div style = "text-align:center;padding-top:15px"> <br>
       <span style = "font-size:30px">LOGIN PAGE</span> <br> <br>
    </div>
    <form  method = "post" action="sql_login.php">
       <div style="text-align:center">   
	      ID :	<input type="text" name="Userid" size="25" placeholder="ID입력"/> <br>
       PW : <input type ="password" size ="25" name ="Userpw" /> <br> <br>
	      <input type = "submit" value = "LOGIN" /> <br> <br>
	      <a href = "Init.php">뒤로 가기(BACK)</a>
	      </div>
    </form>
 
</body>

</html>