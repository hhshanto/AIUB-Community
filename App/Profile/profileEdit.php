<?php
session_start();
if(!isset($_SESSION['name']))
{
    header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_service.php");
$name=$un=$id=$email=$cemail=$pw=$cpw="";
$nameerr=$unerr=$iderr=$emailerr=$cemailerr=$pwerr=$cpwerr=$err="";
$ab = "-";
$count=0;
$counter=0;
$a = "@";
$b='.';
$fail="";
$un=$uname;
$userr=$un;
$user=Userinfo($un);
$sl= $user['SL'];

if(isset($_POST['Submit']))
{
  //Name...................###################################################
  $name=$_POST['name'];
  if(trim($name)=="")
  {
    $nameerr= "*Enter name Please..";
    $counter=$counter+1;
  }
  else if(ord($name[0])>=48 && ord($name[0])<=57)
  {
    $nameerr= "*cannot start with a number..";
    $counter=$counter+1;
  }
  elseif(str_word_count(trim($name))<2)
  {
    $nameerr= "*Name has to be more than one word.";
    $counter=$counter+1;
  }
  else
  {
    for($i=0;$i<strlen($name);$i++)
    {
      if((ord($name[$i])>=65 && ord($name[$i])<=90)||(ord($name[$i])>=97 && ord($name[$i])<=122) || ord($name[$i])==45 || ord($name[$i])==46 || ord($name[$i])==32)
      {
        if($i==strlen($name)-1)
        {
          break;
        }
        else 
          continue;

      }
      else
      {
        $nameerr= "*Invalid name..";
        $counter=$counter+1;
        break;
      }
    }    

  }


//ID....................#####################################
  $id=$_POST['id'];
  if($id=="")
  {
    $iderr= "Enter ID Please..";
    $counter=$counter+1;
  }
  else
  {
    for ($i=0; $i < strlen($id); $i++) 
    {
         if($i==2 || $i==8)
        {
          continue;
        }
         elseif(ord($id[$i])<48 || ord($id[$i])>57)
        {
          $iderr= "*Contains number only..";
          $counter=$counter+1;
          break;
        }
    }

    if ( $counter==0 && ($id[2] !== $ab || $id[8] !== $ab))
    {
      $iderr= "Invalid ID.";
      $counter=$counter+1;
    }
    else
    {
      
    }
  }


//email.......................
  $email=$_POST['email'];

  if($email=="")
  {
    $emailerr= "*Enter email Please..";
    $counter=$counter+1;
  }
  else
  {

    if ((strpos($email,$b) !== false) && (strpos($email,$a) !== false))
    {
      $pos1=strpos($email,$b);
      $pos2=strpos($email,$a);
      if($pos1==$pos2+1 || $pos2>$pos1)
      {
        $emailerr= "*Invalid Email.";
        $counter=$counter+1;
      }
    }
    else
    {
      $emailerr= "*Invalid Email.";
      $counter=$counter+1;
    }
  }


//Confirm Email...................###################################################

  $cemail=$_POST['cemail'];
  if($cemail=="")
  {
    $cemailerr="*Please confirm email...";
    $counter=$counter+1;
  }
  else if($email!==$cemail)
  {
    $cemailerr= "*Email did not match..";
    $counter=$counter+1;
  }

  else
  {
    if ($counter>0) {
    }
    else
    {
      $result=updateUser($un,$name,$id,$email,$sl);
      if($result){
        echo " <script type=\"text/javascript\">
    alert(\"Edit Successful.\");
  </script>";
        header("location: ../Profile/profile.php");
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
    var name = document.forms["editForm"]["name"];               
    var id = document.forms["editForm"]["id"];    
    var email = document.forms["editForm"]["email"];  
    var cemail =  document.forms["editForm"]["cemail"];   

    if (name.value.trim() == "")                                  
    { 
      document.getElementById('nameerr').innerHTML="Insert Name."; 
      name.focus(); 
      return false; 
    }
    else if(name.value != "")
    {
      str= name.value.trim();
      var count = 0;
      for (var i = 0; i < str.length; i++)  
      {
       if (str.charAt(i) == " ") 
       {
        count ++;
      }
    }
    if (count==0) {
      document.getElementById('nameerr').innerHTML="Name should be more than one word.";
      name.focus();
      return false;
    }
    else
    {
      document.getElementById('nameerr').innerHTML="";
    }

  }


  if (id.value == "")                               
  { 
    document.getElementById('iderr').innerHTML="Insert ID.";  
    id.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('iderr').innerHTML="";
  }

  if (email.value == "")                                   
  { 
    document.getElementById('emailerr').innerHTML="Insert Email."; 
    email.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('emailerr').innerHTML="";
  }

  if (email.value.indexOf("@", 0) < 0)                 
  { 
    document.getElementById('emailerr').innerHTML="Invalid Email.";  
    email.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('emailerr').innerHTML="";
  }

  if (email.value.indexOf(".", 0) < 0)                 
  { 
    document.getElementById('emailerr').innerHTML="Invalid Email.";  
    email.focus(); 
    return false; 
  } 
  else
  {
    document.getElementById('emailerr').innerHTML="";
  }

  if (cemail.value != email.value)                           
  { 
    document.getElementById('cemailerr').innerHTML="Email Not Matched.";  
    cemail.focus(); 
    return false; 
  }
  elseif(cemail.value == email.value) 
  {
    document.getElementById('cemailerr').innerHTML="";

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

      <td colspan="3" align="center" style="background-color:Tomato;"><h1>Profile Edit</h1></td>

    </tr>

  </table>

      <section id="banner">
    <form method="POST" name="editForm" action="#" onsubmit="return validation()">
      <div align="center" class="myDiv" >
        
        <center><label><font color="red"><?= $err; ?></font></label></center>
        <br/>
        <div align="center">
          <table>
            <tr>
              <td >
                <font size="5" > Name: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" width="450" height="30">
                <input type="text" style="width: 250px;" name="name" value="<?php 
                if (isset($_POST["name"])){
                  echo $_POST["name"];
                } 
                else
                {
                  echo $user['Name'];
                }
                 ?>">  
                
                <label><font color="red" id="nameerr"><?= $nameerr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Username: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <label><?=$user['Username']?></label>  
                <label><font color="red" id="unerr"><?= $unerr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > ID: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3">
                <input type="text" style="width: 250px;" name="id" value="<?php 
                if (isset($_POST["id"])){
                  echo $_POST["id"];
                } 
                else
                {
                  echo $user['ID'];
                }
                 ?>">  
                <label><font color="red" id="iderr"><?= $iderr; ?></font></label>
              </td>
            </tr>
            <tr>
              <td height="30">
                <font size="5" > Email: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <input type="text" style="width: 250px;" name="email" value="<?php 
                if (isset($_POST["email"])){
                  echo $_POST["email"];
                } 
                else
                {
                  echo $user['Email'];
                }
                 ?>">  
                <label><font color="red" id="emailerr"><?= $emailerr; ?></font></label>
              </td>
            </tr>

            <tr>
              <td height="30">
                <font size="5" > Confirm Email: &nbsp&nbsp&nbsp</font>
              </td>
              <td colspan="3" height="30">
                <input type="text" style="width: 250px;" name="cemail" value="<?php 
                if (isset($_POST["cemail"])){
                  echo $_POST["cemail"];
                } 
                else
                {
                  echo $user['Email'];
                }
                 ?>">  
                <label><font color="red" id="cemailerr"><?= $cemailerr; ?></font></label>
              </td>
            </tr>
          
          </table>
        </div>
        <center><input type="submit" name="Submit" value="Update" style="background:green;width: 100px; height: 30px;">


        </div>
      </form>
    </section>



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