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
             <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB ORATORY CLUB<br></b></font> 
             </h1>
        </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:500;width:600">
        	<p></p>
	      <h3><br/><font face="Verdana" color="black"><b>BUSINESS INFO</b></font> </h3>

	      <font size="3"color="black"<p>Founded in 1996</p></font>
	      <p></p>
         
           <h3><br/><font face="Verdana" color="black"><b>ADDITIONAL CONTACT INFO</b></font> </h3>
            <font size="3"color="black"<p>Call 01680-117765<br>aiub.aoc@gmail.com<br>408/1 Kuratoli, Khilkhet Dhaka, Bangladesh</p>
            </font><br>
        </td>
         
        <td valign="top" style="background:white;height:500;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">Official Facebook Page of AIUB Oratory Club (AOC)

          </font>
          <p></p>
          
          <h4><br/><font face="Verdana" color="black"><b>Biography</b></font> </h4>
          <font size="3"color="black">AIUB Oratory Club popularly known as AOC is one of the strong and competitive forces in the arena of debating in Bangladesh.This is a particular group of students performing as Aiub debating club.It started its journey in the year 1996 founded by Mr. Shibly S. Abdullah, a faculty member of AIUB, with the aim of enhancing the communication and leadership skill of the students of AIUB. Since its establishment it never looked back and made excellent reputation in the field of both English and Bengali debate. The debate club has made its impact both in the national and international field with countless prestigious awards.<br>AOC also performed excellently in many national debating championships which was organized by reputable institutions. AOC also performed regularly in the National Television Debate Competitions and BTV UN Model Debates.<br>Besides achieving excellence in performing debate, AOC has also proved itself in organizing workshops, seminars and debate festivals in the national level.<br>AIUB Oratory club has proved its excellence in public speaking in the international arena. This success was possible because of the internal debating and public speaking workshop that AOC organizes for its students. AOC organizes intra-university annual public speaking contest both in Bengali and English to groom up young orators and debaters.<br>AOC also organizes fun debates and role playing debates in many special occasions like Valentines Day, Victory Day, New Year, Pohela Boishakh and so on. For the first time in Bangladesh AOC put forth a common platform for both inter college and inter university debating clubs from across the country. The AOC has come so far because of the support of AIUB's management and faculties and at last but not the least because of its dedicated members.

          </font>
          <p></p>
         <h4><br/><font face="Verdana" color="black"><b>Founding Date</b></font> </h4>
          <font size="3"color="black"> 1996
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