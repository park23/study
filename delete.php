<!DOCTYPE HTML>
<meta charset="utf8">
<html>
	<head>
		<title>
			удаление
		</title>
		
	</head>
<?php
include "config.php";
include "secure.php";
if($_SERVER['REQUEST_METHOD']=='GET'){
	if(!isset($_GET['user'])){die (header("Location:show.php"));}
	$sec=new Security();
	$user=$sec->secure($_GET['user'],2);
	$STH=$DBH->query("SELECT id FROM students WHERE id=$user");
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$row=$STH->fetch();
	if(empty($user) or empty($row->id)){die("Hacking Attempt!! Fuck you bitch!");}
	else{
	$DBH->exec("DELETE FROM students WHERE id=$user");
	header("Location:show.php");
	
}
}
else{
	"Че за нахуй ?";
}


?>
