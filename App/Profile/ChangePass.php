<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$nperr=$cnperr=$pw=$cpw=$operr=$posErr=$err="";
$count=0;
$counter=0;
if (isset($_GET['posErr'])) {
  $posErr=$_GET['posErr'];
}
$un=$uname;
$userr=$un;
$user=Userinfo($un);
$sl= $user['SL'];

if(isset($_POST['Submit']))
{
  $pw=$_POST['npass'];
  if($pw=="")
  {
    $nperr= "*Password is missing..";
    $counter=$counter+1;
  }
  else if(strlen($pw)<8)
  {
    $nperr= "*Password has to be at least 8 characters.";
    $counter=$counter+1;
  }
  else 
  {
    for($i=0;$i<strlen($pw);$i++)
    {

      if(ord($pw[$i])==64 || ord($pw[$i])==35 || ord($pw[$i])==36 || ord($pw[$i])==37)
      {
        $count=$count+1;
        if($count>=1)
        {
          break;
        }
      }
      else
      {
        if ($i==strlen($pw)-1) {
          $nperr= "*Invalid password.Password must contain at least one of the special characters (@, #, $, %)";
          $counter=$counter+1;
        }
        else
        {
          continue;
        }
      }
    }
  }


$oldpass=$_POST['oldPass'];
//Confirm Password........###################################################################
  $cpw=$_POST['cepass'];
  if($pw!==$cpw)
  {
    $cnperr= "*Password did not match..";
    $counter=$counter+1;
  }
  elseif ($oldpass!=$user['Password']) {
     $err= "*Old Password is incorrect..";
    $counter=$counter+1;
  }
  else
  {
    if ($counter>0) {
    }
    else
    {
      $result=changePass($pw,$sl);
      if($result){
        $posErr="Password Changed Successfully.";
        header("Location:ChangePass.php?posErr=Password Changed Successfully.");
      }

    }
    
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Books</title>
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="../CSS/assets/css/footer.css">
  <script type="text/javascript">
   function validation()                                    
   {              
    var oldPass = document.forms["editForm"]["oldPass"];    
    var newPass = document.forms["editForm"]["npass"];  
    var cnewPass =  document.forms["editForm"]["cepass"];   

    if (oldPass.value.trim() == "")                                  
    { 
      document.getElementById('operr').innerHTML="Insert old password."; 
      oldPass.focus(); 
      return false; 
    }
      else
  {
    document.getElementById('operr').innerHTML="";
  }
    
  if (newPass.value == "")                               
  { 
    document.getElementById('nperr').innerHTML="Insert New Password.";  
    newPass.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('nperr').innerHTML="";
  }

  if (cnewPass.value == "")                                   
  { 
    document.getElementById('cnperr').innerHTML="Insert New password again."; 
    cnewPass.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('cnperr').innerHTML="";
  }


  return true; 
}

</script>
 
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



  <table width="100%" border="2" align="center">

    <tr>

      <td colspan="3" align="center" style="background-color:Tomato;"><h1>Change Password</h1></td>

    </tr>

  </table>

      <section id="banner">
    <form method="POST" name="editForm" action="#" onsubmit="return validation()">
      <div align="center" class="myDiv" >
        
        <center><label><font color="red"><?= $err; ?></font></label></center>
        <center><label><font size="6" color="green"><?= $posErr; ?></font></label></center>
        <br/>
        <div align="center">
          <table  width="50%">
            <tr>
              <td height="30" width="35%">
                <font size="5" > Old Password: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <input type="password" name="oldPass" value="<?php 
                if (isset($_POST["oldPass"])){
                  echo $_POST["oldPass"];
                } 
                 ?>">  
                <label><font color="red" id="operr"><?= $operr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" >New Password: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <input type="password" name="npass" value="<?php 
                if (isset($_POST["npass"])){
                  echo $_POST["npass"];
                } 
                 ?>">  
                <label><font color="red" id="nperr"><?= $nperr; ?></font></label>
              </td>
            </tr>

            <tr>
              <td>
                <font size="5" > <br>Confirm New Password: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <input type="password" name="cepass">  
                <label><font color="red" id="cnperr"><?= $cnperr; ?></font></label>
              </td>
            </tr>
          
          </table>
        </div>
        <center><input type="submit" name="Submit" value="Update" style="background:green;width: 100px; height: 30px;">


        </div>
      </form>
    </section>


</body>




</html>