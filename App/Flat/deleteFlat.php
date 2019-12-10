<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['yes'])){
            $result=removeFlatPost($id);
            if($result){
                header("Location:flats.php");
            }
        }
        else if(isset($_POST['no'])){
            header("Location:flats.php");
        }
        
    }
$flat=loadFlat($id);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Flats</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
</head>

<body bgcolor="PeachPuff">

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


<form method="POST">
<table width="100%" border="2" class="delTab" align="center">

  <tr>

    <td colspan="3" align="center" style="background-color:Tomato; text-align: center;"><h1>Flat Delete</h1></td>

  </tr>

</table>

<table  width="50%" class="delTab" align="center">
  <tr>
      <td align="right">
         <font size="4">Type: &nbsp;&nbsp;&nbsp;</font>
      </td>
      <td align="left">
          <label><?=$flat['Type'] ?></label>
      </td>
  </tr>
  <tr>

      <td align="right">
          <font size="4"><br>Road: &nbsp;&nbsp;</font>
      </td>
      <td align="left">
          <label><br><?=$flat['Road'] ?></label>
      </td>
  </tr>
  <tr>
      <td align="right">
        <font size="4"><br>House: &nbsp;&nbsp;</font>
      </td>
      <td align="left">
        <label><br><?=$flat['House'] ?></label>
      </td>
  </tr>
  <tr>
        <td align="right">
          <font size="4"><br>Area: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><br><?=$flat['Area'] ?></label>
        </td>
  </tr>
  <tr>
        <td align="right">
          <font size="4"><br>Rent: &nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><br><?=$flat['Rent'] ?></label>
        </td>
  </tr>
  <tr>
        <td align="right">
          <font size="4"><br>Available from: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><br><?=$flat['AvailableFrom'] ?></label>
        </td>
  </tr>
  <tr>
        <td align="right">
          <font size="4"><br>Description: </font>
        </td>
        <td align="left">
          <label><br><?=$flat['Description'] ?></label>
        </td>
  </tr>
  <tr>
    <td align="right">
          <input type="submit" style="width: 50px;" name="yes" value="Yes"/> 
    </td>
    <td align="left">
          <input type="submit" name="no" style="width: 50px;" value="No"/>
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