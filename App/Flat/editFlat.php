<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");

$fail="";
$id=$_GET['id'];
$flat=loadFlat($id);

if(isset($_POST['uploadfilesub'])) {

  $filename = $_FILES['uploadfile']['name'];

  $filetmpname = $_FILES['uploadfile']['tmp_name'];

  $folder = 'images/';


  $img_dir= $folder.$filename;

  move_uploaded_file($filetmpname, $folder.$filename);



  $type= $_POST['type'];
  $road= $_POST['road'];
  $house= $_POST['house'];
  $area= $_POST['area'];
  $rent= $_POST['rent'];
  $available= $_POST['available'];
  $description= $_POST['description'];

  if ($filename=="") {
    $filename=$flat['Image'];
    $img_dir=$flat['Dir'];

  }
  if ($type=="") {
    $fail="*Insert type of the post.";
  }
  elseif ($road=="") {
    $fail="*Insert road no.";
  }
  elseif ($house=="") {
    $fail="*Insert house no.";
  }
  elseif ($area=="") {
    $fail="*Insert area.";
  }
  elseif ($rent=="") {
    $fail="*Insert rent.";
  }
  elseif ($available=="") {
    $fail="*Insert availablity.";
  }
  elseif ($description=="") {
    $fail="*Insert description of the post.";
  }
  else
  {
    $result = updateFlat($type,$road,$house,$area,$rent,$available,$description,$img_dir,$filename,$uname,$id);
    if ($result) {
      header("Location:flats.php");
    }
    else
      $fail="*Unsuccessful.";
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



  <table width="100%" border="2" align="center">

    <tr>

      <td colspan="3" align="center" style="background-color:Tomato;"><h1>Post Edit</h1></td>

    </tr>

  </table>

      <table border="1" width="50%" align="center" style="background:LightBlue;text-align: right;margin: 0 auto;">
        <tr>
            <td align="center">
        <form action="#" method="post" enctype="multipart/form-data" >

            
            <font size="4">Type: &nbsp;&nbsp;&nbsp;</font>
            <input type="text" name="type"  value="<?=$flat['Type'] ?>"><br>
            <font size="4"><br>Road: &nbsp;&nbsp;</font>
            <input type="text" name="road"  value="<?=$flat['Road'] ?>"><br>
            <font size="4"><br>House: &nbsp;&nbsp;</font>
            <input type="text" name="house" value="<?=$flat['House'] ?>"><br>
            <font size="4"><br>Area: &nbsp;&nbsp;&nbsp;&nbsp;</font>
            <input type="text" name="area" value="<?=$flat['Area'] ?>"><br>
            <font size="4"><br>Rent: &nbsp;&nbsp;&nbsp;</font>
            <input type="text" name="rent" value="<?=$flat['Rent'] ?>"><br>
            <font size="4"><br>Available From: &nbsp;&nbsp;&nbsp;&nbsp;</font>
            <input type="text" name="available" value="<?=$flat['AvailableFrom'] ?>">



  
            <font size="6"><br>Description</font><br>
             <input type="text" name="description" style="height:50px;width:600px; font-size:12pt;" value="<?=trim($flat['Description']) ?>">
              <br/><br/>
            <input type="file" name="uploadfile" />

            <input type="submit" name="uploadfilesub" value="Save" />
            <a href="flats.php" style="text-decoration: none;">Cancel</a>
          </td>
          </tr>
            <tr>
              <td>
                <label><font size="3" color="red"><?= $fail; ?></font></label>
              </td>
            </tr>
            
        </form>
        
        
    </table>


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