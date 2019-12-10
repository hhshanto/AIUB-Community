<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
if ($uname!="Admin") {
  header("Location:../Unautharize/Unautherized.php");
}
include_once("../../core/user_service.php");
?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AIUB Community | Home</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
  <script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Search/getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>


<style type="text/css">
  input[type=text] {

  width: 150px;
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 250px;
      background-color: Lavender ;
}
.userTable
{
  width: 45%;
  float: right;
  padding-right: 100px;
}
.userTable,th,td
{
  border: 2px;
}
.myButton{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.myButton2{
  background-color: IndianRed;
  border: none;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.myfont{
  font-family: "Comic Sans MS", cursive, sans-serif;
font-size: 25px;
letter-spacing: 2px;
word-spacing: 2px;
color: #58CBFF;
font-weight: 700;
text-decoration: none solid rgb(68, 68, 68);
font-style: normal;
font-variant: normal;
text-transform: none;

}
a{
  padding: 20px 20px;
}


</style>

</head>
<body bgcolor="LightCyan ">

  <header class="header-fixed">

    <div class="header-limiter">

      <h1 style="font-family: Snell Roundhand,cursive;"><a href="../Admin/adminhome.php" >AIUB<span>Community</span></a></h1>

      <nav>
        <a href="../Admin/adminhome.php">Home</a>
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
            <?php
            if ($uname=="Admin") {
             echo "<a href=\"../club/newClub.php\">Add New Club</a>";
            }
            ?>
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

  <table align="center" border="1" width="100%" >

        <th align="center" colspan="3" style="padding-top: 10px; padding-bottom: 10px; background-color: BurlyWood;">
            <font size="8"> List of all Users</font>
        </th>
    </table>
    <form>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" id="searcBox" name="users" onkeyup="showUser(this.value)" placeholder="Enter name to search detailes.">
</form>
<br>
<div id="txtHint"><b></b></div>

<table class="userTable">
        <?php
        //finding all user
        $resultUsers= checkUserName();
        foreach ($resultUsers as $row)
        {
            $user=$row['Username'];
            if ($user==$uname) {
                continue;
            }
            echo "<tr align=\"center\">";
            echo "<td align=\"right\">";            
            //echo $user;
            echo "<font size=\"6\" class=\"myfont\"><a style=\"text-decoration: none;\" href=\"../Messages/chatpage.php?reciever=$user\">$user</a></font>";
            echo "</td>";
            echo "<td align=\"center\">";
              echo "<button class=\"myButton\"><a  href='userEdit.php?Username=$user' style= \"text-decoration:none;\">Edit</a></button>";
              echo "</td>";
              echo "<td align=\"left\">";
              echo "<button class=\"myButton2\"><a href='userRemove.php?Username=$user' style= \"text-decoration:none;\">Delete</a></button>";
            echo "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan=\"3\">";
            echo "<hr>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

</table>



  </body>
    </html>