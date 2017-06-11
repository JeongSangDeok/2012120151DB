<?php
include "sql_connect.php";
$query = "select * from User NATURAL JOIN Book_reservation"; //sql문
$result = $db->query($query); //query날림. 실행결과 데이터 묶음 리턴됨.

$i = 0;
echo '<table border = "1" >';
echo '<tr>';
echo '<td> user_id </td> ';
echo '<td> user_pw </td> ';
echo '<td> user_name </td> ';
echo '<td> user_gender </td> ';
echo '<td> user_job </td> ';
echo '<td> user_interest </td> ';
echo '<td> book_name </td> ';
echo '<td> reserved_date </td> ';
echo '<td> reserved_time </td> ';
echo '</tr>';
while($row = mysqli_fetch_array($result)){ //데이터 묶음에서 fetch(가져옴) array(배열로)
echo '<tr>';
echo '<td>'.$row[user_id].'</td> ';
echo '<td>'.$row[user_pw].'</td> ';
echo '<td>'.$row[user_name].'</td> ';
echo '<td>'.$row[user_gender].'</td> ';
echo '<td>'.$row[user_job].'</td> ';
echo '<td>'.$row[user_interest].'</td> ';
echo '<td>'.$row[book_name].'</td> ';
echo '<td>'.$row[reserved_date].'</td> ';
echo '<td>'.$row[reserved_time].'</td> ';
echo '</tr>';
$i++;
}

echo '</table>';
echo '<a href="Admin_main.php">To Admin Page</a>'; 

 ?>