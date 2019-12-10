<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}

$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$id=$_GET['id'];
$rsc= Loadresource($id);

$title=$description=$fail="";
if(isset($_POST['uploadfilesub'])) {

  $filename = $_FILES['uploadfile']['name'];

  $filetmpname = $_FILES['uploadfile']['tmp_name'];

  $folder = 'files/';


  $img_dir= $folder.$filename;

  move_uploaded_file($filetmpname, $folder.$filename);



  $title= $_POST['title'];
  $course= $_POST['course'];
  $type= $_POST['type'];
  if (isset($_POST['dep'])) {
    $dep=$_POST['dep'];
  }
  else
  {
    $dep=$rsc['Department'];
  }
  if ($filename=="") {
       $filename=$rsc['Name'];
    $img_dir=$rsc['Dir'];
  }

  if (trim($title)=="") {
    $fail="*Insert Title of the project.";
  }
  elseif (trim($course)=="") {
    $fail="*Insert Description of the project.";
  }
  else
  {
      $res=updateResource($filename,$img_dir,$title,$type,$course,$dep,$id);
    //$sql = "INSERT INTO `resources` (name,dir,title,type,course)  VALUES ('$filename','$img_dir','$title','$type','$course')";

    //$qry = mysqli_query($conn,  $sql);
    if ($res) {
      echo "string";
     header("Location: ../Resources/$dep.php");
   }
   else
   {
    $fail="Not Successful";
   }

 }



}

?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AIUB Community | Home</title>
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

  <table border="1" align="center" width="100%" style="background:LightBlue ;table-layout: fixed;">
    <tr>
      <td align="center">
        <label><font size="3" color="red"><?= $fail; ?></font></label>
      </td>
    </tr>
    <tr>
      <td align="center">
        <form action="#" method="post" enctype="multipart/form-data" >

          <font size="8">Upload New Resource</font><br>

          <font size="6">Title</font> <br>
          <input type="text" name="title" style="height:50px;font-size:14pt;" value="<?php 
                if (isset($_POST["title"])){
                  echo $_POST["title"];
                } 
                else
                {
                  echo $rsc['Title'];
                }
                 ?>"><br/>
          <font size="6">Course</font> <br>
          <input type="text" name="course" style="height:50px;font-size:14pt;" value="<?php 
                if (isset($_POST["course"])){
                  echo $_POST["course"];
                } 
                else
                {
                  echo $rsc['Course'];
                }
                 ?>"><br/>
          <font size="6">Type</font><br>
          <input type="text" name="type" style="height:50px;font-size:14pt;" value="<?php 
                if (isset($_POST["type"])){
                  echo $_POST["type"];
                } 
                else
                {
                  echo $rsc['Type'];
                }
                 ?>"><br/>
      <font size="6">Department: </font>
           <select name="dep" >
                <option value="" disabled selected hidden>Please Choose...</option>
                <option value="FSIT">FSIT</option>
                <option value="FASS">FASS</option>
                <option value="FE">FE</option>
                <option value="FBA">FBA</option>
          </select><br>

          <input type="file" name="uploadfile" />

          <input type="submit" name="uploadfilesub" value="Update" />


        </form>
      </td>
    </tr>
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