<?php
$query = "select book_name from Book"; //sql문
$result = mysql_query($query, $db) //query날림. 실행결과 데이터 묶음 리턴됨.
 ?>
<table>
<tr>
<?
while($row = mysql_fetch_array($result)){ //데이터 묶음에서 fetch(가져옴) array(배열로)
echo '<td>'.$row[book_name].'</td> ';
}
?>
</tr>
</table>
?>