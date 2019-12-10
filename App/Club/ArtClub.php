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
        <td colspan="2"style="background:#2C3E4C;height:50;width:1200">
             <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB ART CLUB<br></b></font> 
             </h1>
        </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:700;width:600">
        	<p></p>
	      <h3><br/><font face="Verdana" color="black"><b>FOUNDATION</b></font> </h3>

	      <font size="3"color="black"<p>Founded in 2009</p></font>
	      <p></p>
         <h4><br/><font face="Verdana" color="black"><b>Mission</b></font> </h4>

         <font size="3"color="black">Provide the opportunity for American International University-Bangladesh<br> (AIUB) student to know and practice theater in friendly and appropriate <br>environment, and offer members the chance to perform for an audience.<br>The mission of AIUB Arts Club is to unite the artistic population of AIUB <br>and enhance their skills through visual lectures, demonstrations,workshops<br>and exhibitions.</font>
  
            <p></p>

            <h4><br/><font face="Verdana" color="black"><b>Vission</b></font> </h4>
            <font size="3"color="black"> AIUB Arts Club envisions a community thriving with fine arts, where students<br> promote self-actualization and cultural commitment in every aspect of their activities.</font>
  

           <h3><br/><font face="Verdana" color="black"><b>CONTACT INFO</b></font> </h3>
            <font size="3"color="black"<p>artsclub.aiub@gmail.com<br><a href="http://www.youtube.com/channel/UC_cNpDSSu3H8BfmycJs1ydQ">www.youtube.com/channel/UC_cNpDSSu3H8BfmycJs1ydQ</a></p>
            </font><br>

        </td>
         
        <td valign="top" style="background:white;height:700;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">The mission of AIUB Arts Club is to unite the artistic population of AIUB and enhance their skills through visual lectures, demonstrations, workshops and exhibitions.</font>
          <p></p>
         <h4><br/><font face="Verdana" color="black"><b>General Information </b></font> </h4>
          <font size="3"color="black">AIUB ARTS CLUB from American International University- Bangladesh had Successfully Organized the First Inter Private University Of Bangladesh Along with Seven other Universities.
            </font>
            <p></p>
            <h4><br/><font face="Verdana" color="black"><b>Description</b></font> </h4>
          <font size="3"color="black">AIUB Arts Club is a students' club of American International University-Bangladesh.
          </font>
          <p></p>
          <font size="3"color="black">AIUB Arts Club aims to:</font>
          
          <ul>
              <li> Unite the wide array of talented artists in AIUB</li>
              <li>Host workshops for different kinds of painting techniques</li>
              <li>Invite guest artists from Charukala Institute of Fine Arts</li>
              <li>Host individual exhibitions around the campus of AIUB</li>
              <li>Host an annual exhibition in association with other universities</li>
              <li>Take part in National Art Competitions as representatives of AIUB Activities</li>
          </ul> 

          <font size="3"color="black">The Mediums are:</font> ~
          <ul>
              <li>Oil Painting</li>
              <li>Water Color Painting</li>
              <li>Acrylic Painting</li>
              <li>Pencil Sketch</li>
              <li>Pen Sketch</li>
              <li>Digital Art</li>
              <li>Charcoal Art</li>
              <li>Mixed Medium</li>
              <li>Sculpture </li>
              <li>Digital Sculpture </li>
          </ul> 
        

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