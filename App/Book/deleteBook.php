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
            $result=removeBookPost($id);
            if($result){
                header("Location:booksnew.php");
            }
        }
        else if(isset($_POST['no'])){
            header("Location:booksnew.php");
        }
        
    }
$book=loadBook($id);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Books</title>
  <link rel="stylesheet" href="css/main.css" />
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
<table width="100%" border="2" align="center">

  <tr>

    <td colspan="3" align="center" style="background-color:Tomato;"><h1>BOOK Delete</h1></td>

  </tr>

</table>

<table   width="50%" align="center">
  <tr style="height: 40px;">
      <td style="text-align: right;" align="center">
         <font size="4">Name: &nbsp;&nbsp;&nbsp;</font>
      </td>
      <td align="center">
          <?=$book['Name'] ?>
      </td>
  </tr>
  <tr style="height: 40px;">

      <td style="text-align: right;"  >
          Author: &nbsp;&nbsp;
      </td>
      <td align="center">
          <?=$book['Author'] ?>
      </td>
  </tr>
  <tr style="height: 40px;">
      <td style="text-align: right;">
        <font size="4">Edition: &nbsp;&nbsp;</font>
      </td>
      <td align="left">
        <label><?=$book['Edition'] ?></label>
      </td>
  </tr>
  <tr style="height: 40px;">
        <td style="text-align: right;">
          <font size="4">Price: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><?=$book['Price'] ?></label>
        </td>
  </tr>
  <tr style="height: 40px;">
        <td style="text-align: right;">
          <font size="4">Phone: &nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><?=$book['Phone'] ?></label>
        </td>
  </tr>
  <tr style="height: 40px;">
        <td style="text-align: right;">
          <font size="4">Email: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><?=$book['Email'] ?></label>
        </td>
  </tr>
  <tr style="height: 40px;">
        <td style="text-align: right;">
          <font size="4">Description: &nbsp;&nbsp;</font>
        </td>
        <td align="left">
          <label><?=$book['Description'] ?></label>
        </td>
  </tr>
  <tr>
    <td style="text-align: right;">
          <input type="submit" class="form-submit-button" style="width: 50px;" name="yes" value="Yes"/> 
    </td>
    <td align="left">
          <input type="submit" class="form-submit-button" style="width: 50px; margin-left: 20px;" name="no" value="No"/>
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