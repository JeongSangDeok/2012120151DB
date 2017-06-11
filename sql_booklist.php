<?php
include "sql_connect.php";
$query = "select * from Book"; //sql문
$result = $db->query($query); //query날림. 실행결과 데이터 묶음 리턴됨.

$i = 0;
echo '<table border = "1" >';
echo '<tr>';
echo '<td> book_name </td> ';
echo '<td> book_type </td> ';
echo '<td> book_writer </td> ';
echo '<td> book_price </td> ';
echo '<td> book_publisher </td> ';
echo '<td> book_date </td> ';
echo '<td> book_num </td> ';
echo '</tr>';
while($row = mysqli_fetch_array($result)){ //데이터 묶음에서 fetch(가져옴) array(배열로)
echo '<tr>';
echo '<td>'.$row[book_name].'</td> ';
echo '<td>'.$row[book_type].'</td> ';
echo '<td>'.$row[book_writer].'</td> ';
echo '<td>'.$row[book_price].'</td> ';
echo '<td>'.$row[book_publisher].'</td> ';
echo '<td>'.$row[book_date].'</td> ';
echo '<td>'.$row[book_num].'</td> ';
echo '</tr>';
$i++;
}

echo '</table>';
echo '<a href="main.php">To Main Page</a>'; 

 ?>