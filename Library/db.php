<?php
$serverName="localhost";
$username="root";
$password="";
$databaseName="aiub community";

function executeNonQuery($query){
global $serverName,$username,$password,$databaseName;
$result=false;
$connection=mysqli_connect($serverName,$username,$password,$databaseName);
if($connection){
    $result=mysqli_query($connection,$query);
}
return $result;
}

function executeQuery($query){
    return executeNonQuery($query);
}
?>