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
  <title>AIUB Community | Computer Club</title>
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
      <td colspan="2"style="background:#2C3E4C;height:50;width:1200">
        
        <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB Computer CLUB<br></b></font> </h1>
      </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:700;width:600"><p></p>
        	
	          <h3><br/><font face="Verdana" color="black"><b>BUSINESS INFO</b></font> </h3>

	             <font size="3"color="black"<p>Founded on September 13,2012</p></font>
	                <p></p>
                  <h4><br/><font face="Verdana" color="black"><b>Mission</b></font> </h4>

           <font size="3"color="black">AIUB Computer Club ( ACC ) is committed to it's members. So It started with a mission,and that is “to introduce the students with IT world.</font>
  
            <p></p>
           <h3><br/><font face="Verdana" color="black"><b>CONTACT INFO</b></font> </h3>
            <font size="3"color="black">Email: <a href="mailto:aiubcomputerclub@gmail.com" target="_top">aiubcomputerclub@gmail.com<a/></font>
              <font size="3"color="black"><a href="https://aiubcc.org/" target="_top"><p>WEBSITE</p><a/></font><br>
        </td>
         
        <td valign="top" style="background:white;height:700;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">Computer Club</font>
          <p></p>
          <h4><br/><font face="Verdana" color="black"><b>Description</b></font> </h4>
          <font size="3"color="black">Since ACCs inception, AIUB Computer Club, ACC, has devoted to serve AIUBs students with full of its resources and its interests. They have successfully completed many events, however, among them Computer Science Festival,featuring programming contest, gaming contest, idea or concept presentation, application showcasing for mobile, web, and desktop, and networking contest, brought its biggest success and appreciation. ACC has related with various organizations, for example : Mozilla Bangladesh, Microsoft Student Partner, BASIS Student Forum. with them ACC organized so many events . ACC has been active since it started, and it will be organizing such events like these, which are actually related with modern technology and current job market. Being an ACC member, on the other hand, means privileged with more than just adequate facilities: gaming, participating in dissimilar workshops, for instance, Firefox OS application development, and Android development, and contests at the first place, touring in several places etc.
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
