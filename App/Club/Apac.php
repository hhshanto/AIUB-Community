<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
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
<center>
<table align="top"border="0" width="100%">
    <tr align="center">
      <td colspan="2"style="background:#2C3E4C;height:50;width:200">
        
        <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB PERFORMING & ARTS CLUB<br></b></font> </h1>
      </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:700;width:600"><p></p>
        	
	          <h3><br/><font face="Verdana" color="black"><b>BUSINESS INFO</b></font> </h3>

	             <font size="3"color="black"<p>Founded on October 14, 2004</p></font>
	                <p></p>
                  <h4><br/><font face="Verdana" color="black"><b>Mission</b></font> </h4>

           <font size="3"color="black">create leaders in perticular sector.</font>
  
            <p></p>
           <h3><br/><font face="Verdana" color="black"><b>CONTACT INFO</b></font> </h3>
            <font size="3"color="black"<p>Call-01670-389112<br>club.apac.aiub@gmail.com</p></font><br>
        </td>
         
        <td valign="top" style="background:white;height:700;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">Cultural Club</font>
          <p></p>
          <h4><br/><font face="Verdana" color="black"><b>Description</b></font> </h4>
          <font size="3"color="black">“Let Your Soul Play”: that is the slogan with which The APAC of today first took its baby steps into the more diverse world of cultural activities, in the year 2007. Even though this student club existed till the end of 2006, APAC’s activities were limited to cultural programs during occasions such as the Pohela Boishakh and the Convocation Ceremony.
          </font>
          <p></p>
          <font size="3"color="black">APAC, which stands for AIUB Performing Arts Club, is now a well organized group of artists with talents that come under the following categories:</font>
          
          <ul>
              <li>Singer</li>
              <li>Musician</li>
              <li>Reciter</li>
              <li>Dancer</li>
              <li>Designer</li>
              <li>Organizer</li>
          </ul> 

          <font size="3"color="black">Even though it is merely a student organization, through sheer zeal and hard work of its talented members, APAC has been able to conduct various cultural activities with success. Today, APAC is not only conducting programs held on Pohela Boishakh and convocation ceremonies, but on Valentine’s Day, Pohela Falgun, Foundation Day and any Charity, Music or Comedy shows held at AIUB.</font> ~
          <p></p>

           <font size="3"color="black">Only five students of AIUB decided to resurrect the only Cultural Club in American International University-Bangladesh (AIUB) before this years and APAC has come a long way through sheer determination of those founder members and also those who shared their passion for the Cultural arts of Bangladesh and decided to join and aid APAC in its growth. Now, not only is APAC going strong in its own regular activities, it has also aided the activities of other clubs by lending their helping hands of other teams of organizers. Having reached such heights in this short period of time is truly remarkable, and the prospect of its future growth is certainly inevitable.
         </font>
          
         
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