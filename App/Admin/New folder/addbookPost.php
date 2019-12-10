<?php
include_once("../../core/user_service.php");
$sl=$_GET['id'] ;
if ($uname!="Admin") {
  header("Location:../Unautharize/Unautherized.php");
}
$result=approveBook($sl);
if ($result) {
	header("Location:../Book/pendingPost(Books).php");
}
 ?>