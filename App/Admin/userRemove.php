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

$un=$_GET['Username'];
$user=Userinfo($un);

if(isset($_POST['YES']))
{
  $result=removeUser($un);
            if($result){
                header("Location:users.php");
            }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
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



  <table width="100%" border="2" align="center">

    <tr>

      <td colspan="3" align="center" style="background-color:Tomato;"><h1>User Remove</h1></td>

    </tr>

  </table>

      <section id="banner">
    <form method="POST" action="#">
      <div align="center" class="myDiv" >
        <br/>
        <div align="center">
          <table>
            <tr>
              <td >
                <font size="5" > Name: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" width="450" height="30">
                <label><?=$user['Name']?></label>  
                
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Username: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <label><?=$user['Username']?></label>  
                
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > ID: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <label><?=$user['ID']?></label> 
                
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Email: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <label><?=$user['Email']?></label> 
                
              </td>
            </tr>
            <tr>
              <td align="right">
              <input type="Submit" name="YES" value="YES">
              </td>
              <td align="center"> 
                <a href='users.php'>NO</a>
              </td>
            </tr>

            
          
          </table>
        </div>
        </div>
      </form>
    </section>
</body>

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


</html>