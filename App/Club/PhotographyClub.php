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
             <h1><br/><font size="6"face="Georgia" color="white"><b>AIUB PHOTOGRAPHY CLUB<br></b></font> 
             </h1>
        </td>
    </tr>
     
    <tr align="topr">
        <td valign="top" style="background:white;height:700;width:600">
        	<p></p>
	      <h3><br/><font face="Verdana" color="black"><b>FOUNDATION</b></font> </h3>

	      <font size="3"color="black"<p>Founded in 2005</p></font>
	      <p></p>
         <h4><br/><font face="Verdana" color="black"><b>Mission</b></font> </h4>

         <font size="3"color="black">AIUBPC works to improve the skill of the photographers of their club by different workshops, exhibitions, photo outdoors and lots more.
          </font>
          <p></p>
          <h4><br/><font face="Verdana" color="black"><b>General Information </b></font> </h4>
          <font size="3"color="black">President : Md.Golam Musa Sazid<br>Mobile: +8801672303104<br>Facebook:<a href="https://www.facebook.com/sazid.musa">https://www.facebook.com/sazid.musa</a>
            </font>
            <p></p>
             <font size="3"color="black">Vice President:Arannya Provakar Debnath<br>Mobile:+8801677031909<br>Facebook:<a href="https://www.facebook.com/aranya.debnath.79">https://www.facebook.com/aranya.debnath.79</a>
            </font>
            <p></p>
  
          <h3><br/><font face="Verdana" color="black"><b>CONTACT INFO</b></font> </h3>
            <font size="3"color="black"><p>Call-01841-248272<br>aiubphotographyclub@gmail.com<br>
            </p>
            </font><br>

        </td>
         
        <td valign="top" style="background:white;height:700;width:600">
             <p></p>
              <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
              <p></p>
         <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
          <font size="3"color="black">know about photography Join us<br><a href="http://www.facebook.com/AIUBPC">http://www.facebook.com/AIUBPC</a></font>
          <p></p>
         
            
            <h4><br/><font face="Verdana" color="black"><b>Description</b></font> </h4>
          <font size="3"color="black">A Picture says a thousand words.The idea that a picture can convey what might take to express was voiced many years ago and it still holds true. A photographer’s strength is his ability to record the reality accurately. He is the witness of events. AIUB Photography Club is one of the most active clubs of AIUB. AIUBPC has young and talented photographers in their club who covers all the programs of AIUB. 
          </font>
          <p></p>
          <font size="3"color="black">A feeling of missing something gave birth to an idea and with the permission of the authorities it turned into reality. AIUB Photography Club has started its journey on 24th December, 2005 by a group of students who was an admirer of photography and had some knowledge; found some people of same interest in the university. Though they shared same kind of interest, they didn't have the opportunity to go any further. Especially when they looked up to other private universities they started to feel the lacking of a club and they proposed the authorities about their idea and succeed in their second try. AIUB Photography was called APC from 2005 to 2011. But From 2011 it has been renamed as AIUBPC.</font>
          <p></p>

          <font size="3"color="black">AIUB Photography Club (AIUB PC) is a platform which encourages the students of AIUB to use their creative skills, share their knowledge and participate in technical discussion and most of all present their collective photographs through initiatives like Photography workshops, Photography outdoors, Exhibitions and lots more.</font> 

          <p></p>

          
         <font size="3"color="black">AIUB Photography Club has already organized Intra-AIUB Photography Exhibition 2011 for the first time outside the campus and achieved a big response.</font> 

         <p></p>


         <font size="3"color="black">AIUB Photography Club works to improve the basic skills of photography. We believe that practice and hard work can make anything awesome. We have started our journey and hopefully we will be successful.</font> 
         <p></p>

         <font size="3"color="black">AIUB Photography Club Provides,</font> 

         <p></p>

         <ul>
              <li>Basic Course on Photography</li>
              <li>Photography Workshops</li>
              <li>Photography Outdoors</li>
              <li>Photo Adda (Discussion on Photographs)<br>and
               Lots of fun and Entertainment</li>
              
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