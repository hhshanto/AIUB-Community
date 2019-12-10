<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}

$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
?>
<html>
<head>
  <title>AIUB Community | About</title>
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
        <a href="#">About</a>
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
    <table align="top"border="0" width="100%" style="background-color: bisque">


     <tr align="center">
      <td valign="top" style="background:bisque;height:100;width:600">
       <h3><br/><font face="Verdana" color="black"><b>BUSINESS INFO</b></font> </h3>

       <font size="5"color="black">Founded on March 12, 2019</font>
     </td>
   </tr>



   <tr align="center">
    <td>
     <h3><font face="Verdana" color="black">ADDITIONAL CONTACT INFO</font> </h3>
     <font size="5"color="black"><p>Call 01558960259<br>hasanibnesaleh@gmail.com<br>408/1 Kuratoli, Khilkhet Dhaka, Bangladesh</p>
     </font><br>
   </td>
 </tr>


 <tr align="center">
   <td valign="top" style="background:bisque;height:500;width:600">
     <p></p>
     <h3><br/><font face="Verdana" color="black"><b>MORE INFO</b></font> </h3>
     <p></p>
     <h4><br/><font face="Verdana" color="black"><b>About</b></font> </h4>
     <font size="5"color="black"><p>The project is about making a social networking site for AIUB students. This is actually a social networking site for a particular institution. Students usually face a lot of problems regarding their courses like they do not find the resources, they sometimes do not have the knowledge about which course should be taken first, majority of the students are not that much aware about different scholarship of home or abroad, seminars, workshops, there is a little connection between alumni and existing students and so on. So, the sole purpose of the project is to alleviate these problems and make it easier for the students. Some students feel shy or does not like to go to faculty for counseling, so there will be list of altruists who will dedicatedly help other student in their needs. A lot of AIUBians live in different mess or bachelor flats, the website will have a special forum where the list of flats that need new members will be listed. Also, if anyone wants to sell their unused book they can post and whoever needs to buy book can contact with him and so on. The main focus will be to provide academic related help among existing students of AIUB. The main user will be the existing students and there will be admin panel of the website. Students have to open an account to gain access of the website. The admin will accept the membership request until then the newly member will be deactivated. The scope of the project is solely to help student in every aspect we can, also make resources easier to find and handy by centralizing them into a website. </p>
     </font>
     <p></p>
     <h4><br/><font face="Verdana" color="black"><b>Founder Members</b></font> </h4>
     <font size="5"color="black"> <a style="text-decoration: none; font-size:30px;" href="https://www.facebook.com/shanto.hh" target="_blank" >Hasan Mohammad</a><br>
      <a style="text-decoration: none; font-size:30px;" href="https://www.facebook.com/stark305" target="_blank" >Ariyan Mahmud</a><br>
      <a style="text-decoration: none; font-size:30px;" href="https://www.facebook.com/robin.mehedi10" target="_blank">Mehedi Hasan Robin</a><br>
      <?php
      if ($uname!="Admin") {
        echo "<a style=\"text-decoration: none; font-size:30px;\" href=\"../Messages/ChatPage.php?reciever=Admin\">Contact Admin</a>";
      }
      ?>
      
    </font>
    <p></p>
  </td> 

</tr>

</table>
</center>

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
