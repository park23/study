
<?php
$mysql_user='study';
$mysql_pass=123456;//хуле пока так
$dbname='study';
$mysql_host='localhost';
$driver = array(PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES `utf8`');

try {  
    #connect to MySQL 
  $DBH = new PDO("mysql:host=$mysql_host;dbname=$dbname", $mysql_user, $mysql_pass,$driver);  
}  
catch(PDOException $e) {  
    echo $e->getMessage('connection unreal');  
}