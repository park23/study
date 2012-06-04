<!DOCTYPE HTML>
<meta charset="utf8">
<?php 
class Security{

	function secure($value,$type){
		if($type==1){

			$res = mysql_real_escape_string($value);
			$res = trim($res);
			return $res;

		}
		elseif($type==2){
			$res=intval($value);
			return $res;
		}
		
		else{
			die();
		}
	}
}