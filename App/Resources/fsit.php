<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$files_show="";
$name="";
$rsc= resources("FSIT");
?>


<html>
<head>
  <title>AIUB Community | Resources</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">



  <!--################################################### -->

  <!-- <script>
    function showResult(str) {
      if (str.length==0) { 
        document.getElementById("livesearch").innerHTML="";
        document.getElementById("livesearch").style.border="0px";
        return;
      }
      if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
function onSearchbox(str,count)
{
          //alert(count);
         //document.getElementById("searchbox").value=str;
         document.getElementById("livesearch").innerHTML="";
        return;
}
</script> -->


<!--################################################### -->





</head>
<body bgcolor="DarkKhaki ">
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
  <table border="1"  align="center" width="100%">
<tr>
  <td colspan="10" align="center" height="100"  style="background-color: DarkSalmon;">

    <font size="8"> Faculty of Science and Information Technology</font>
    
  </td>
</tr>
<!-- <tr>
  <td align="center" colspan="10">
  <form>
    <input type="text" id="searchbox" size="30" onkeyup="showResult(this.value)" placeholder="Enter Course Name">
    &nbsp; <input type="button" name="search" value="Search" >
    <div id="livesearch" onclick="onSearchbox(this.innerHTML)"></div>


  </form>

  
  </td>

</tr> -->

</table>	
</table>
<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
<table  border="1" class="tableR" align="center" width="70%" style=" table-layout: fixed;">
   <tr height="" >

    <td colspan="5" style="background-color: LIGHTCORAL;text-align: center;"><h1>Resources <?php
        if ($uname=="Admin") {
          echo "<button ><a href=\"../Admin/addResource.php\" style=\"text-decoration: none;\">Add New Resource</a></button>";
        }
        ?></h1></td>

  </tr>
  <tr>
    <td  colspan="5" style="background-color: DARKSALMON;word-wrap: break-word;">
      <?php

      
     foreach ($rsc as $rows)
      {
        $name = $rows['Name'];
        $title = $rows['Title'];
        $type = $rows['Type'];
        $course = $rows['Course'];
        $files_show= "Files/$name";
        $id=$rows['SL'];

      ?>
        
        <font size="6" color="TEAL">Title: </font>
        <label><font size="6"><?= $title; ?></font></label>
        <br>
        <br>
        <font size="6" color="TEAL">Type: </font>
        <font size="6"><?= $type; ?></font>
                <br>
        <br>
        <font size="6" color="TEAL">Course: </font>
        <label><font size="6"><?= $course; ?></font></label>
<br>
        <br>
       <div align=center>File: <a id="file" href="<?= $files_show; ?>"><?= $name; ?></a></div>
       <hr>
        <?php
        
      }
        ?>
        


      </td>
      </tr>

  </table>
 </form>


<body>
  </html>