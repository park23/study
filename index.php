<!DOCTYPE HTML>
<meta charset="utf8">
<html>
	<head>

		<title>
Анкета студента
		</title>
		<script src="js/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	</head>
	<body>

		<div class="col_9" >
			<div class='hint'>
				<p>1.Анкету нужно заполнять полность.</p>
				<p>2.Анкета должна быть заполнена верна.</p>
				<p>3.Дату вводить в формате хххх-хх-хх(год-месяц-число)</p>
				<p>4.Не вводите лишней инфы</p>
				<p>5.Не вводите длинные значения</p>
				<button onclick=hideFaq()>Скрыть</button>
			</div>
		<form action='add.php' method='POST' name='addUser' id='form'>
			<div class="col_3">
		<p>имя:</p>
		<input type="text" name='firstname' placeholder='пример: Василий' required>
		<p>фамилия:</p>
		<input type="text" name='lastname' placeholder='пример: Пупкин' required>
		<p>отчество:</p>
		<input type="text" name='middlename' placeholder='пример: Васильевич' required>
		<p>дата рождения:</p>
		<input type="date" name='birthday' placeholder='пример: 23.01.1990' required>
		<p>национальность:</p>
		<input type="text" name='nation' placeholder='пример: еврей' required>
		</div>
	<div class="col_3">
		<p>пол:</p>
		<select name="sex" size="1">
		<option selected="selected" value="1">Мужской</option>
		<option  value="2">Женский</option>
		</select>
	
		<p>аддрес:</p>
		<input type="text" name='address' style="width:300px;" placeholder='пример: г.Бишкек село Ленинсое дом 5' />
		<p>профессиональная деятельность:</p>
		<input type="text" name='work' style="width:300px;" placeholder='пример: Оператор сотовой связи(ОПСОС)' />
		<p>Семейное положение:</p>
		<input type="text" name='family' style="width:300px;" placeholder='пример: холост/не замужем' />
		<p>Образование:</p>
		<input type="text" name='edu' style="width:300px;" placeholder='пример: школа №1 1992-2009, КГУСТА 2009-2014' required>
		</div>
	<div class="col_3">
		<p>группа:</p>
		<input type="text" name='grup' placeholder='пример: ПОВТ-1-09' required>
		<p>курс:</p>
		<select name="course" size="1">
<option selected="selected" value="Первый">Первый курс</option>
<option  value="Второй">Второй курс</option>
<option value="Третий">Третий курс</option>
<option value="Четвертый">Четвертый курс</option>
<option value="Пятый">Пятый курс</option>
</select>
<p>телефон:</p>
		<input type="text" name='phone' placeholder='пример: 0555666000' required>
		<p>email:</p>
		<input type="email" name='email' placeholder='пример: lamer@mail.ru' required>
	</br>
		<button class="blue">Добавить студента</button></br>
		
		
	</div>
	
		

		
		</form>	
<div class='col_3'>

<a href="show.php" style="text-decoration:none;"><button style="background:#282828; margin-top:10px; color:#fff;">Список студентов</button></a>
<button class='blue' onclick=showFaq()>FAQ</button>
</div>

<script type="text/javascript">
$(".hint").hide(0);
function showFaq(){
	$(".hint").show(3000);
	$("#form").hide(1000);
}
function hideFaq(){
	$(".hint").hide(3000);
	$("#form").show(1000);
}
</script>
		</div>
		
<?php 
$developer="p4rk";
(!isset($developer)? die(header("Location:http://prostoporno.net/categories/gay-porno/")):'' ). "\n";
?>
<div style="background:#3D5AFF; color:#fff;  font-size:30px;" align='center'>
	АНКЕТИРОВАНИЕ СТУДЕНТОВ
</div>
<footer>
	<marquee behavior="alternate" direction="right"><span style="color:#56F21D"><b>Разработчик:</b> <i>Пак Дмитрий. Группа ПОВТ-1-09</i>  ||  <b>Developer:</b> <i><?=$developer;?> &#169 2012</i></span></marquee>
</footer>

	</body>

</html>