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
             <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB SHOMOY CLUB<br></b></font> 
             </h1>
        </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:500;width:600">
        	<p></p>
	      <h3><br/><font face="Verdana" color="black"><b>BUSINESS INFO</b></font> </h3>

	      <font size="3"color="black"><p>Founded on April 5, 2009</p></font>
	      <p></p>
         
           <h3><br/><font face="Verdana" color="black"><b>ADDITIONAL CONTACT INFO</b></font> </h3>
            <font size="3"color="black"><p>Call 01680-117765<br>shomoyclub@gmail.com<br>K-66/1, Kuratoli Road, Kuril, Khilkhet Dhaka, Bangladesh</p></font><br>
        </td>
         
        <td valign="top" style="background:white;height:500;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">HOMOY club is the one and only Social Welfare Club of American International University-Bangladesh
          </font>
          <p></p>
         <h4><br/><font face="Verdana" color="black"><b>General Information </b></font> </h4>
          <font size="3"color="black">SHOMOY club is the one and only Social Welfare Club of American International University-Bangladesh

            </font>
            <p></p>

            <h4><br/><font face="Verdana" color="black"><b>Description</b></font> </h4>
          <font size="3"color="black">“SHOMOY” this is a students club of Aiubians. This was created in 5th April of 2009. It was formed by some of our friends with a new concept and vision of social activities. At first we organized some activities to celebrate the Pahela Baishak which includes T-Shirt with breakfast. Then we thought to spread our spirit among others. We have more than 100 registered members with a presidium committee. The biggest program that we have done is “Help the AILA affected people’. We collected over 70 thousand taka from our friend circle and faculties to raise a fund. Then distributed this  among the poor and helpless people of Satkhira. We are still working. Health camp, shishumela, blood donation camp, awarness semeniar, entertainment for street childs etc are some of our works. We hope our this kind of activities will remain continue through out our whole life. Those who are interested to join with us are warmly welcome.  
          </font>
          <p></p>
         <h4><br/><font face="Verdana" color="black"><b>Founding Date</b></font> </h4>
          <font size="3"color="black">April 5, 2009
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