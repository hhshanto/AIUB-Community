<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$err="";
$id=$_GET['id'];
$altruist=loadAltruist($id);
$counter=$count=0;

if(isset($_POST['submit'])) {

$name= $_POST['name'];
  $dep= $_POST['department'];
  $pCourse= $_POST['prefCourse'];
  $time= $_POST['time'];
  $user= $_POST['user'];

  if ($name=="") {
    $err="*Insert Name of the altruist.";
    $counter=$counter+1;
  }
  elseif ($dep=="") {
    $err="*Insert department name of the altruist.";
    $counter=$counter+1;
  }
  elseif ($pCourse=="") {
    $err="*Insert Preferred courses of the altruist.";
    $counter=$counter+1;
  }
  elseif ($time=="") {
    $err="*Insert free time of the altruist.";
    $counter=$counter+1;
  }
  elseif ($user=="") {
    $err="*Insert username of the altruist.";
    $counter=$counter+1;
  }
  elseif (str_word_count($user)==1) {
    $resultUsers= checkUserName();
    foreach ($resultUsers as $rows)
    {
      if ($rows['Username']==$user) {
        $count=1;
      }
    }
    if ($count==0) {
          $err="*Insert valid username of the altruist.";
          $counter=$counter+1;
        }
  }
  if ($counter==0)
  {
    //$result = addAltruist($name,$dep,$pCourse,$time,$user);
    if (updateAltruist($name,$dep,$pCourse,$time,$user,$id)) {
      header("Location:../Counseling/Altruists.php");
    }
    else
      $err="*unsuccessful.";
  }




}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
  <link rel="stylesheet" href="css/main.css" />
</head>

<body bgcolor="LightBlue">

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



<table width="100%" align="center">

  <tr>

    <td colspan="3" style="background-color:Tomato; text-align: center;"><h1>Altruist Edit</h1></td>

  </tr>

</table>
<form action="#" method="post" enctype="multipart/form-data" >
  <table  width="30%" align="center" style="background:LightBlue ;table-layout: fixed;">
    <tr>
      <td style="text-align: right;">
      	<center><label><font color="red"><?= $err; ?></font></label></center>
        <font size="4">Name: &nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="name"  value="<?=$altruist['Name'] ?>"><br>
        <font size="4"><br>Department: &nbsp;&nbsp;</font>
        <input type="text" name="department"  value="<?=$altruist['Department'] ?>"><br>
        <font size="4"><br>Preferred Course: &nbsp;&nbsp;</font>
        <input type="text" name="prefCourse" value="<?=$altruist['PreCourse'] ?>"><br>
        <font size="4"><br>Time: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="time" value="<?=$altruist['Time'] ?>"><br>
        <font size="4"><br>User: &nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="user" value="<?=$altruist['User'] ?>"><br>
      </td>
    </tr>
    <tr>
      <td style="text-align: right;">
        <input style="width: 65px;" type="submit" name="submit" value="Update">
      </td>
    </tr>




  </table>
</form>

<!-- Footer -->
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>AIUB<span>Community</span></h3> 
      </div>

      <div class="footer-center">


        <div>
          <i class="fa fa-phone"></i>
          <p>+8801558960259</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">hasanibnesaleh@gmail.com</a></p>
        </div>
        <div>
          
          <p class="footer-company-name">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAIUB Community &copy; 2019</p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the Site</span>
          The scope of the site is solely to help student of AIUB in every possible aspect, also make resources easier to find and handy by centralizing them into this website. 
        </p>



      </div>

    </footer>
</body>




</html>