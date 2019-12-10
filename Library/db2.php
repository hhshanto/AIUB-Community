<?php
$serverName="localhost";
$username="root";
$password="";
$databaseName="messages";

function executeNonQuery2($query){
global $serverName,$username,$password,$databaseName;
$result=false;
$connection=mysqli_connect($serverName,$username,$password,$databaseName);
if($connection){
    $result=mysqli_query($connection,$query);
}
return $result;
}

function executeQuery2($query){
    return executeNonQuery2($query);
}
?>