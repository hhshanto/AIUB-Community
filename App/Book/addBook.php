<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");

$title=$description=$fail="";

if(isset($_POST['uploadfilesub'])) {

  $filename = $_FILES['uploadfile']['name'];

  $filetmpname = $_FILES['uploadfile']['tmp_name'];

  $folder = 'images/';


  $img_dir= $folder.$filename;

  move_uploaded_file($filetmpname, $folder.$filename);



  $name= $_POST['name'];
  $author= $_POST['author'];
  $edition= $_POST['edition'];
  $price= $_POST['price'];
  $phone= $_POST['phone'];
  $email= $_POST['email'];
  $description= $_POST['description'];

  // if (trim($name)=="") {
  //   $fail="*Insert Name of the Book.";
  // }
  // elseif (trim($author)=="") {
  //   $fail="*Insert author name of the Book.";
  // }
  // elseif (trim($edition)=="") {
  //   $fail="*Insert edition of the Book.";
  // }
  // elseif (trim($price)=="") {
  //   $fail="*Insert price of the Book.";
  // }
  // elseif (trim($phone)=="") {
  //   $fail="*Insert your phone no.";
  // }
  // elseif (trim($email)=="") {
  //   $fail="*Insert your email.";
  // }
  // elseif (trim($description)=="") {
  //   $fail="*Insert description of the Book.";
  // }
 if ($filename=="") {
    $fail="*Insert picture of the Book.";
  }

  else
  {
    //name,dir,title,description,username
    $result = addBook($name,$author,$edition,$price,$phone,$email,$description,$img_dir,$filename,$uname);
    if ($result) {
      header("Location:booksnew.php");
    }
    else
      $fail="*Unsuccessful.";
      //$sql = "INSERT INTO books (Name, Author,Edition,Price,user,image,dir,phone,email,Description) VALUES ('$name','$author','$edition','$price','$uname','$filename','$img_dir','$phone','$email','$description')";

    //$qry = mysqli_query($conn,  $sql) or die("hoynai");
  }



}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="css/main.css">
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

    <td colspan="3"  style="background-color:Tomato; text-align: center;"><h1>BOOK ADD</h1></td>

  </tr>

</table>

<table  width="100%" align="center" style="background:LightBlue ;table-layout: fixed;">
  <tr>
          <td style="text-align: center;">
            <label><font size="3" color="red"><?= $fail; ?></font></label>
          </td>
        </tr>
  <tr>
    <td style="text-align: center; ">
      <form action="#" method="post" enctype="multipart/form-data" >


        <font size="4">Name: &nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="name" placeholder="Name" value="<?php 
                if (isset($_POST["name"])){
                  echo $_POST["name"];
                }?>" required><br>
        <font size="4"><br>Author: &nbsp;&nbsp;</font>
        <input type="text" name="author" placeholder="Author" value="<?php 
                if (isset($_POST["author"])){
                  echo $_POST["author"];
                }?>" required><br>
        <font size="4"><br>Edition: &nbsp;&nbsp;</font>
        <input type="text" name="edition" placeholder="Edition"value="<?php 
                if (isset($_POST["edition"])){
                  echo $_POST["edition"];
                }?>" required><br>
        <font size="4"><br>Price: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="price" placeholder="Price"value="<?php 
                if (isset($_POST["price"])){
                  echo $_POST["price"];
                }?>" required><br>
        <font size="4"><br>Phone: &nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="phone" placeholder="Phone"value="<?php 
                if (isset($_POST["phone"])){
                  echo $_POST["phone"];
                }?>" required><br>
        <font size="4"><br>Email: &nbsp;&nbsp;&nbsp;&nbsp;</font>
        <input type="text" name="email" placeholder="Email"value="<?php 
                if (isset($_POST["email"])){
                  echo $_POST["email"];
                }?>" required>




        <font size="6"><br>Description</font><br>
        <input type="text" name="description" style="height:50px;width:600px; font-size:12pt;" value="<?php echo isset($_POST["description"]) ? $_POST["description"] : ''; ?>" required >
              <br/><br/><br/><br/>
        <label id="upFile"> Enter Your File
          <input type="file" id="File" name="uploadfile"   size="60" >
        </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" class="btn" name="uploadfilesub" value="ADD" />

        

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