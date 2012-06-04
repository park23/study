<!DOCTYPE HTML>
<meta charset="utf8">
<html>
	<head>
		<title>
			Страничка студента
		</title>
		<script src="js/jquery-1.7.2.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	</head>

	<body>

<?php
session_start();
include "config.php";
include "secure.php";

if($_SERVER['REQUEST_METHOD']=='GET'){
	if(!isset($_GET['user'])){die (header("Location:index.php"));}
	$sec=new Security();
	$id=$sec->secure($_GET['user'],2);

	$STH=$DBH->query("SELECT id,firstname,lastname,middlename,birthday,national,work,family,address,sex,edu,grup,course,phone,email,avatar FROM students WHERE id=$id");
	$STH->setFetchMode(PDO::FETCH_OBJ); 

	$row=$STH->fetch();

	if(empty($id) or empty($row->id)){die("Hacking Attempt!! Fuck you bitch!");}
	?>
<div class='user'>
<p>
<img src=img/profile.png align='center'> <?=$row->lastname;?> <?=$row->firstname;?> <?=$row->middlename;?></p>

<p>
<img src=img/birthday.png align='center'> <?=$row->birthday;?></p>
<p>
<img src=img/nation.png align='center'> <?=$row->national;?></p>
<p>
<img src=img/job.png align='center'> <?=$row->work;?></p>
<p>
<img src=img/family.png align='center'> <?=$row->family;?></p>

<?php
$_SESSION['id']=$row->id;

?>


</div>
<div class='user'>
	<p>
<img src=img/study.png align='center'> <?=$row->grup;?> , <?=$row->course;?> курс
</p>
<p>
<img src=img/address.png align='center'><?=$row->address;?></p>
<p>
<img src=img/sex.png align='center'> <?=($row->sex==1 ? 'мужской':'женский' )?></p>
<p>
<img src=img/phone.png align='center'><?php if(strlen($row->phone)<=6){echo $row->phone; }else{echo "+(996) $row->phone";} ?>
</p>
<p>
<img src=img/email.png align='center'> <?=$row->email;?>
</p>
</div>
</br>
<div class='nav'><p>
<a href=index.php><button class='blue' >Добавить студента</button></a>
</p>
<p>
<a href=show.php><button class='blue' >Список студентов</button></a>
</p>
<p>
<form name="upload" action="image.php" method="POST" ENCTYPE="multipart/form-data">
 Сменить картинку: <input type="file" name="userfile">
 <input type="submit" name="upload" value="загрузить">
</form>
	</p>
	<img id='image' src=photos/<? if(empty($row->avatar)){echo "lol.jpg";}else{echo $row->avatar;}?>>
</div>

	<?php
}


?>
