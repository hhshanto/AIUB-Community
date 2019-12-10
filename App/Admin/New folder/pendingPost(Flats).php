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
$pendingFlats=pendingFlatinfo();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Books</title>
  <link rel="stylesheet" href="../css/main.css" />
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
</head>

<body>

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

  <table width="100%" border="0" align="center" style="background-color:Tomato;">

    <tr>

      <td colspan="3" align="center" ><h1>Pending Flat Rent Post</h1></td>

    </tr>

  </table>



  <table  border="1" align="left" width="100%" style=" table-layout: fixed;" id="dtable">

      <form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <?php
        foreach ($pendingFlats as $rows)
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

            
            
            <b>User : <?= $user; ?> </b><br>
              Type : <?= $type; ?><br>
              Road : <?= $road; ?><br>
              House : <?= $house; ?><br><br>
            <b>Area : <?= $area; ?></b><br>
              Rent : <?= $rent; ?><br>
              Available : <?= $available; ?><br>
        
        <p><b>Description :</b> <?= $description; ?></p><br>
        
          <a href='addFlatPost.php?id=<?=$id; ?>'>ADD</a>
          <a href='../Flat/deleteFlat.php?id=<?=$id; ?>'>DISCARD</a>
        

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