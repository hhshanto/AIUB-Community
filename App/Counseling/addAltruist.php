<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$nameerr=$usererr=$deperr=$timeerr=$cemailerr=$pcerr=$err="";
$count=0;
$counter=0;

if(isset($_POST['Submit'])) {

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
        echo $rows['Username']." ";
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
    if (addAltruist($name,$dep,$pCourse,$time,$user)) {
      header("Location:../Counseling/Altruists.php");
    }
    else
      echo "hoynai bhai";
  }



}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Altruists</title>
    <link rel="stylesheet" href="../css/header-fixed.css">
    <link rel="stylesheet" href="../CSS/assets/css/footer.css">
    <link rel="stylesheet" href="css/main.css" />
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



  <table width="100%" border="2" align="center" >

    <tr>

      <td colspan="3" style="background-color:Tomato; text-align: center;"><h1>Altruist ADD</h1></td>

    </tr>

  </table>

      <section id="banner">
    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <div align="center" class="myDiv" >
        <center><label><font color="red"><?= $err; ?></font></label></center>
        <br/>
        <div align="center">
          <table style="height: 300px; background-color: ">
            <tr>
              <td >
                <font size="5" > Name: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" width="450" height="30">
                <input type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">  
                <label><font color="red"><?= $nameerr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">

                <font size="5" > Department: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <input type="text" name="department" value="<?php echo isset($_POST["department"]) ? $_POST["department"] : ''; ?>">  
                <label><font color="red"><?= $deperr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Preferred Course: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <input type="text" name="prefCourse" value="<?php echo isset($_POST["prefCourse"]) ? $_POST["prefCourse"] : ''; ?>">  
                <label><font color="red"><?= $pcerr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Time: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <input type="text" name="time" value="<?php echo isset($_POST["time"]) ? $_POST["time"] : ''; ?>">  
                <label><font color="red"><?= $timeerr; ?></font></label>
              </td>
            </tr>

            <tr>
              <td height="30">
                <font size="5" > User: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <input type="text" name="user" value="<?php echo isset($_POST["user"]) ? $_POST["user"] : ''; ?>">  
                <label><font color="red"><?= $usererr; ?></font></label>
              </td>
            </tr> 
          </table>
        </div>
        <center><input type="submit" name="Submit" value="ADD" style="background:green;width: 100px; height: 30px;">

        </div>
      </form>
    </section>



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