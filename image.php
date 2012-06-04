<!DOCTYPE HTML>
<meta charset="utf8">
<html>
  <head>
    <title>
    </title>
<?php
session_start();
include "config.php";
if($_SERVER['REQUEST_METHOD']=='POST'){

$uploaddir = 'photos/'; // Папка куда закачивать файлы 
$extentions = array(".gif",".jpg",".png"); // Массив разрешенных форматов файлов 
$userfilesize = $_FILES['userfile']['size']; // Вычисление размера загружаемого файла 
$maxfilesize = 200000; // Максимально допустимый размер файла 
 
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']); 
 
 if((in_array(strrchr($_FILES['userfile']['name'], "."),$extentions)) && ($maxfilesize >= $userfilesize)) // 
  { 
    // Если копирование произведено удачно, выводим сообщения 
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) // 
      { 
        $fname = ($_FILES['userfile']['name']); // Вычисление имени файла и присвоение переменной 
     echo "<img src=img/ajax-loader.gif>";
  $data=array($fname);
$STH=$DBH->prepare("UPDATE students SET avatar = ? WHERE id=".$_SESSION['id']);
$STH->execute($data);

        echo ("<script language=\"javascript\">alert('Файл photo/$fname успешно закачан!');</script>"); 
        echo ("<script language=\"javascript\">history.back();</script>"); 

      } 
    else
      { 
          echo ("<script language=\"javascript\">alert(\"Ошибка при передаче файла на сервер!\");</script>"); 
        echo ("<script language=\"javascript\">history.back();</script>"); 
      } 
  } 
   // Если превышен максимальный размер файла бля
 elseif ($maxfilesize < $userfilesize) 
  { 
      echo ("<script language=\"javascript\">alert(\"Превышен максимальный размер файла!\");</script>"); 
    echo ("<script language=\"javascript\">history.back();</script>"); 
  } 
 else
  { 
    // Если расширение файла имеет недопустимое расширение 
    echo ("<script language=\"javascript\">alert('Файл имеет недопустимое расширение!');</script>"); 
    echo ("<script language=\"javascript\">history.back();</script>"); 
    exit(); 
  }
}
else{
  
  die(Header("Location:index.php"));
}
  ?>