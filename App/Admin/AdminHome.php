<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
if ($uname!="Admin") {
  header("Location:../Homee/home.php");
}
include_once("../../core/user_service.php");
include_once("../../core/user_messages.php");
$fail="";


  $table_name= "generalforum";
if(isset($_POST['send']))
{

  $text= $_POST['text'];
  $text=trim($text);
  if ($text=="") {
    $fail="*Cannot Send Blank message.";
  }
  else
  {
      if(sendTextGen($text,$table_name,$uname))
      {
        $fail="Sent";
      }
      else
      {
        $fail=  "Error in inserting: ";
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
  <link rel="stylesheet" href="../Homee/css/main.css">  
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


  <table border="1"   align="center" width="50%" style=" table-layout: fixed;">

    <tr id="chistory" >

      <td colspan="3" align="center"><h1>General Forum</h1></td>

    </tr>
    <?php
  //getting chat history
    $table_name= "generalforum";
    $checkHistory = checkChat($table_name);
    if ($checkHistory) {
     $chatHistory= oldChat($table_name);
     $string= "\"word-wrap: break-word;\"";
     echo "<tr class=\"tableRow\">
     <th>Text</th>
     <th >User</th>
     <th style=\"width: 20px;\">Time</th>
     </tr>";
     foreach ($chatHistory as $row)
     {
      echo "<tr id=\"chatRow\">";
      echo  "<td style=".$string.">".$row['Text']."</td>";
      echo  "<td>".$row['sender']."</td>";
      echo  "<td align=\"center\" >".$row['Time']."</td>";
      echo "</tr>";

    }

  }
  ?>
</table>
<table  align="center" width="50%" >
  <tr>
    <td align="center" >
      <form action="#" method="post">
        <font size="6">Compose New Message</font><br>
        <textarea type="text" name="text" style="height:100px; width:800px; font-size:14pt;"></textarea><br/><br/>
        <label style="color: DarkRed;font-size:20px;"><?php echo $fail ?></label>
        <br><br><button type="submit" id="sendBtn" name="send">SEND</button>
      </form>
    </td>
  </tr>
</table>



<table style="height: 70%">
  <tr>
    <td>
      a
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