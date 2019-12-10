<?php
include_once("../../data/user_data_access2.php");
function checkChat($table_name)
{
	return checkingChat($table_name);
}
function sendText($text,$table_name,$table_name2,$sender,$reciever)
{
	return textSend($text,$table_name,$table_name2,$sender,$reciever);
}
function sendTextGen($text,$table_name,$sender)
{
	return textSendGen($text,$table_name,$sender);
}
function tableNew($table_name,$table_name2)
{
	return newTable($table_name,$table_name2);
}
function oldChat($table_name)
{
	return chatOld($table_name);
}
function checkTable($value)
{
	return tableCheck($value);
}
?>