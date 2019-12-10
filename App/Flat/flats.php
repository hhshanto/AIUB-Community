<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$flats=Flatinfo();

?>


<!DOCTYPE html>
<html>
<head>
  <title>Flats</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="css/main.css">
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



  <table width="100%" border="0" align="center" style="background-color:Green;">

    <tr>

      <td colspan="3" align="center" ><h1>FLATS INFORMATION</h1></td>
      <td > 
        <button ><a href="addFlat.php" style="text-decoration: none;">Add New Post</a></button>
        <?php
       if ($uname=="Admin") {
              echo "<button ><a href=\"pendingPost(Flats).php\" style=\"text-decoration: none;\">Pending Posts</a></button>";
            }
        ?>
      </td>

    </tr>

  </table>



  <table  border="1" align="left" width="100%" style=" table-layout: fixed;" id="dtable">

      <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <?php
        foreach ($flats as $rows)
        {



          $user= $rows['User'];
          $type= $rows['Type'];
          $road= $rows['Road'];
          $house= $rows['House'];
          $area= $rows['Area'];
          $rent= $rows['Rent'];
          $available= $rows['AvailableFrom'];
          $img_name = $rows['Image'];
          $img_src = $rows['Dir'];
          $id=$rows['SL'];
          $description= $rows['Description'];


          ?>
          <tr>
          <td align="left" colspan="4" style="background-color: DARKSALMON;word-wrap: break-word;">

            
            
            <b>User : <?= $user; ?> </b>
            <?php 
          if ($user==$uname) {
           $contact=null;

         }
         else {
          $contact= "<font size=\"4\"><a style=\"text-decoration:none;\" class=\"contact\" href=\"../Messages/chatpage.php?reciever=$user\">Contact</a></font>";
         }
         echo $contact."<br>";
         ?>
              Type : <?= $type; ?><br>
              Road : <?= $road; ?><br>
              House : <?= $house; ?><br><br>
            <b>Area : <?= $area; ?></b><br>
              Rent : <?= $rent; ?><br>
              Available : <?= $available; ?><br>
        
        <p><b>Description :</b> <?= $description; ?></p><br>
        <?php
        if ($uname==$user || $uname=="Admin") {
          echo "<button><a href='editFlat.php?id=$id' style= \"text-decoration:none;\">Edit</a></button>";
          echo " &nbsp;";
          echo "<button><a href='deleteFlat.php?id=$id' style= \"text-decoration:none;\">Delete</a></button>";        
        }
        ?>

        

          </td>



          <td align="right">
            <img width="100%" height="200" src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" />
          </td>
          </tr>
          </form>
          

          <?php
        }
        ?>

  </table>



</body>




</html>