<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$user = Userinfo($uname);
if (isset($_POST['yes']) ) {
  header("Location:ProfileEdit.php");
}

?>
<html>
<head>

  <title>AIUB Community | Home</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
</head>
<body>

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




<table width="100%" border="1"  align="center">

  <tr>

    <td align="center" style="background-color:Tomato; width: 80%"><h1>Profile</h1></td>
    <td align="center" style="background-color:Tomato;"> 
      <button ><a href="ChangePass.php" style="text-decoration: none;display: inline-block;">Change Password</a></button>
    </td>

  </tr>

</table>
  <form method="POST" action="#" >
<table align="center" style="width: 100%;text-align: center;">
  <tr>
      <td align="right">
         <font size="4">Name: &nbsp;&nbsp;&nbsp;</font>
      </td>
      <td align="left">
          <label><?=$user['Name']?></label>
      </td>
  </tr>
  <tr>

      <td align="right">
          <font size="4"><br>ID: &nbsp;&nbsp;</font>
      </td>
      <td align="left">
          <label><?=$user['ID'] ?></label>
      </td>
  </tr>
  <tr>

      <td align="right">
          <font size="4"><br>Email: &nbsp;&nbsp;</font>
      </td>
      <td align="left">
          <label><?=$user['Email']?></label>
      </td>
  </tr>

  <tr>
    <td align="center" colspan="2">
          <input type="submit" name="yes" value="Edit"/>
    </td>
  </tr>

</table>
  </form>

  <body>
    </html>