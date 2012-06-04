<!DOCTYPE HTML>
<meta charset="utf8">
<html>
	<head>
		<title>

		</title>
	</head>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'secure.php';
include 'config.php';
$sec=new Security();
$firstname=$sec->secure($_POST['firstname'],1);
$lastname=$sec->secure($_POST['lastname'],1);
$middlename=$sec->secure($_POST['middlename'],1);
$birthday=$sec->secure($_POST['birthday'],1);
$nation=$sec->secure($_POST['nation'],1);
$work=$sec->secure($_POST['work'],1);
$family=$sec->secure($_POST['family'],1);
$sex=$sec->secure($_POST['sex'],2);
$address=$sec->secure($_POST['address'],1);
$edu=$sec->secure($_POST['edu'],1);
$grup=$sec->secure($_POST['grup'],1);
$course=$sec->secure($_POST['course'],1);
$phone=$sec->secure($_POST['phone'],2);
$email=$sec->secure($_POST['email'],1);
if(!empty($firstname) and !empty($lastname) and !empty($middlename) and !empty($birthday) and !empty($nation) and !empty($sex) and !empty($address) and !empty($edu) and !empty($family) and !empty($phone) and !empty($email)){
	$data=array($firstname,$lastname,$middlename,$birthday,$nation,$sex,$address,$work,$edu,$family,$grup,$course,$phone,$email);
$STH=$DBH->prepare("INSERT INTO students(firstname,lastname,middlename,birthday,national,sex,address,work,edu,family,grup,course,phone,email)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$STH->execute($data);
header("Location:show.php");

}
else{
	echo "Введены не все данные! <a hreh='index.php'>Вернуться назад и сделать как надо!!!</a>";
}

}
else{
	header("Location:index.php");
}
?>