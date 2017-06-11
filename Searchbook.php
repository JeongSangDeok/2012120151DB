<?php
include "sql_connect.php";
$query = "select * from Book"; //sql문
$result = $db->query($query); //query날림. 실행결과 데이터 묶음 리턴됨.

$i = 0;
echo '<table border = "1" >';

while($row = mysqli_fetch_array($result)){ //데이터 묶음에서 fetch(가져옴) array(배열로)
echo '<tr>';
echo '<td>'.$row[book_name].'</td> ';
//echo '<td>'.$row[user_pw].'</td> ';
//echo '<td>'.$row[user_name].'</td> ';
//echo '<td>'.$row[user_gender].'</td> ';
echo '</tr>';
$i++;
}

echo '</table>';

 ?>