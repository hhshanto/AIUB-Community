<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$students=Studentinfo();

?>


<!DOCTYPE html>
<html>
<head>
  <title>ALtruists</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
</head>

<body bgcolor="DARKSALMON">
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



  <table width="100%" border="1" align="center" style="background-color:Tomato; ">

    <tr>

      <td colspan="3" style="text-align: center;" ><h1>Altruists INFORMATION</h1></td>
      <td > 
        <?php
        if ($uname=="Admin") {
          echo "<button ><a href=\"addAltruist.php\" style=\"text-decoration: none;\">Add New Altruist</a></button>";
        }
        
        ?>
        
      </td>

    </tr>

  </table>



  <table   align="center" width="40%" style=" table-layout: fixed; padding-bottom: 100px;" id="dtable">

    <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
      <?php
      foreach ($students as $rows)
      {

        $name= $rows['Name'];
        $dep= $rows['Department'];
        $PCourse= $rows['PreCourse'];
        $time= $rows['Time'];
        $user= $rows['User'];
        $id=$rows['SL'];
        ?>
        <tr>
          <td align="center" colspan="4" style="background-color: DARKSALMON;word-wrap: break-word;">



            <b>Name : </b><?= $name; ?> <br>
            <b>Department : </b><?= $dep; ?><br>
            <b>Preferred Courses : </b><?= $PCourse; ?><br>
            <b>Time : </b><?= $time; ?><br>
            <b>User : </b><?= $user; ?> 
            <?php 
            if ($user==$uname) {
              $contact=null;

            }
            else {
              $contact= "<font size=\"3\"><a id=\"Message\" href=\"../Messages/chatpage.php?reciever=$user\">Contact</a></font>";
            }
            echo $contact."<br>";
            ?>  
            <?php
            if ($uname=="Admin") {
              echo "<button><a  href='editAltruist.php?id=$id' style= \"text-decoration:none;\">Edit</a></button>";
              echo " &nbsp;";
              echo "<button><a href='deleteAltruist.php?SL=$id' style= \"text-decoration:none;\">Delete</a></button>";
              echo "<hr>";        
            }
            ?>      
            <hr>
          </td>
        </tr>
      </form>


      <?php
    }
    ?>

  </table>



</body>




</html>