<?php
include_once("../../Library/db2.php");
function checkingChat($table_name)
{
	$query= "DESCRIBE $table_name";
	return executeNonQuery2($query);
}
function textSend($text,$table_name,$table_name2,$sender,$reciever)
{
	$sql1 = "INSERT INTO $table_name (Text, sender,reciever) VALUES('$text','$sender','$reciever')";
	$sql2 = "INSERT INTO $table_name2 (Text, sender,reciever) VALUES('$text','$reciever','$sender')";
	executeNonQuery2($sql1);
	return executeNonQuery2($sql2);
}
function textSendGen($text,$table_name,$sender)
{
	$sql1 = "INSERT INTO $table_name (Text, sender) VALUES('$text','$sender')";
	return executeNonQuery2($sql1);
}
function newTable($table_name,$table_name2)
{
	$sql="CREATE TABLE $table_name ( `SL` INT(255) NOT NULL AUTO_INCREMENT , `Text` VARCHAR(1000) NOT NULL , `sender` VARCHAR(255) NOT NULL , `reciever` VARCHAR(255) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`SL`));";
	$sql2="CREATE TABLE $table_name2 ( `SL` INT(255) NOT NULL AUTO_INCREMENT , `Text` VARCHAR(1000) NOT NULL , `sender` VARCHAR(255) NOT NULL , `reciever` VARCHAR(255) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`SL`));";
	executeNonQuery2($sql);
	return executeNonQuery2($sql2);
}
function chatOld($table_name)
{
	$sql="SELECT * FROM $table_name";
	$result=executeQuery2($sql);
    $chatList=array();
    if($result){
       for ($i=0; $row =mysqli_fetch_array($result) ; $i++) { 
           $chatList[$i]=$row;
       }
    }
    return $chatList;
}
function tableCheck($value)
{
	$queryy="DESCRIBE $value";
	//return $queryy;
		return executeNonQuery2($queryy);
	
}


?>