<!DOCTYPE HTML>
<meta charset="utf8">
<html>
	<head>
		<title>
			Всю студенты
		</title>
		<script src="js/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	</head>
<?php
include "config.php";
$STH=$DBH->query("SELECT id,firstname,lastname,middlename,birthday,sex,grup,course,phone,email FROM students");
$STC=$DBH->query("SELECT count(*) FROM students");

$STC->setFetchMode(PDO::FETCH_NUM);
while($c=$STC->fetch()){
echo "<h3>в базе <span style='color:#3D5AFF; font-size:25px;'>$c[0]</span> студент(а)(ов)</h3>";
}
# создаем запрос
   # выбираем режим выборки  
$STH->setFetchMode(PDO::FETCH_OBJ);  
  
?>

<table id="table">
<td id='bla'>Имя</td><td id='bla'>Фамилия</td><td id='bla'>Отчество</td><td id='bla'>Дата рождения</td><td id='bla'>Пол</td><td id='bla'>Группа</td><td id='bla'>Курс</td><td id='bla'>Телефон</td><td id='bla'>email</td><td id='bla'>Удаление</td>
<tr>

	<?php
	# выводим результат
while($row = $STH->fetch()) {  
	
	echo "<td>";
    echo "<a style='text-decoration:none; color:blue; font-size:20px;' href=view.php?user=$row->id><img src=img/profile.png align='center'>$row->firstname</a>\n";
    echo "</td>";
    echo "<td>";
    echo $row->lastname . "\n"; 
    echo "</td>";
    echo "<td>";
 echo $row->middlename . "\n"; 
 echo "</td>";
  echo "<td>";
 echo $row->birthday . "\n"; 
 echo "</td>";
  echo "<td>";
 echo ($row->sex==1 ? 'мужской':'женский' ). "\n"; 
 echo "</td>";
  echo "<td>";
 echo $row->grup . "\n"; 
 echo "</td>";
  echo "<td>";
 echo $row->course . "\n"; 
 echo "</td>";
  echo "<td>";
  if(strlen($row->phone)<=6){echo $row->phone; }else{echo "+(996) $row->phone";} 
 echo "</td>";
  echo "<td>";
 echo $row->email . "\n"; 
 echo "</td>";
 echo "<td>";?>
  <a href="delete.php?user=<?=$row->id?>" onClick="return window.confirm('Вы точно хотите удалить этого студента ?')"><img src=img/delete.png></a>
 <?php
 echo "</td>";
 echo "</tr>";
  echo "</br>";


      
}
?>

 </table>
 <div style="margin:10px;">
<a href="index.php" style="text-decoration:none;"><button style="background:#282828; margin-top:10px; color:#fff;">Добавить студента</button></a>
</div>

