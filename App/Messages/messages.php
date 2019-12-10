<?php
//session
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_messages.php");
include_once("../../core/user_service.php");
/////////////////////////////////////
?>

<!DOCTYPE html>
<html>
<head>
	<title>Messages</title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="../css/header-fixed.css">
	<link rel="stylesheet" href="../CSS/assets/css/footer.css">
</head>


<body bgcolor="DarkSeaGreen">


	<header class="header-fixed">

    <div class="header-limiter">

      <h1 style="font-family: Snell Roundhand,cursive;"><a href="../Homee/home.php" >AIUB<span>Community</span></a></h1>

      <nav>
        <a href="../Homee/home.php">Home</a>
        <div class="dropdown">
          <label>Club</label>
          <div class="dropdown-content">
            <a href="../club/ACC.php">AIUB Computer Club</a>
            <a href="../club/Apac.php">AIUB Performing Arts Club</a>
            <a href="../club/ArtClub.php">AIUB Arts Club</a>
            <a href="../club/DramaClub.php">AIUB Drama Club</a>
            <a href="../club/FilmClub.php">AIUB Film Club</a>
            <a href="../club/OratoryClub.php">AIUB Oratory Club</a>
            <a href="../club/PhotographyClub.php">AIUB Photography Club</a>
            <a href="../club/ShomoyClub.php">AIUB Shomoy Club</a>
 
          </div>
        </div>

        <a href="../Counseling/Altruists.php">Counseling</a>
        <a href="../Book/booksnew.php">Books</a>
        <div class="dropdown">
          <label>Resources</label>
          <div class="dropdown-content">
            <a href="../Resources/fsit.php">FSIT</a><br>
            <a href="../Resources/fass.php">FASS</a><br>
            <a href="../Resources/fba.php">FBA</a><br>
            <a href="../Resources/fe.php">FE</a>
          </div>
        </div>
 
        <a href="../Flat/flats.php">Flat Rent</a>
        <a href="../Messages/Messages.php">Messages</a>
        <a href="../Profile/Profile.php"><?=$uname?></a>
        <a href="../About/About.php">About</a>
        <?php
        if ($uname=="Admin") {
          echo "<a href=\"../Admin/users.php\">Users</a>";
        }
        ?>
        <a href="../Login/logout.php">Logout</a>
        

      </nav>

    </div>

  </header>


	<table class="tableuser" align="center" width="50%" style=" table-layout: fixed;">

		<tr height="" >

			<td colspan="3" align="center"><h1>Messages</h1></td>

		</tr>
		<?php

		$users = array();
		$usersname=checkUserName();
		echo "<tr>
		<th>List</th>
		</tr>";
//finding all user and keeping in associative array.////////////////////
		foreach ($usersname as $row)
		{
			$users[$row['Username']]=$row['Username'];
		}
  //Making Table name////////////////////////////////
		$tablenames = array();
		foreach ($users as $Username => $value){ 
			if ($uname!=$value) {
				$table_name= $uname.$value;
				$tablenames[$value]=$table_name;
			} 
			else
				continue;

		}
//Finding valid table and reciever///////////////
		$validTName= array();
		$validuser = array();

		foreach ($tablenames as $name => $value){
			$con=mysqli_connect("localhost","root","","messages");
			if (mysqli_query($con,"DESCRIBE $value")) {
				$validTName[$value]=$value;
				$result=mysqli_query($con,"SELECT * FROM $value");
				$row = mysqli_fetch_array($result);
				$validuser[$row['reciever']]= $row['reciever'];
			} 
			else
				continue;
		}

		?> 

		<?php 
		foreach ($validuser as $name => $value)
		{
			echo "<tr>";
			echo "<td>";

			echo "<a style=\"text-decoration: none; font-size:30px;\" href=\"ChatPage.php?reciever= $value\">$value</a>";
			echo "</td>";
			echo "</tr>";
		} 
		?>
	</table>


</body>




</html>