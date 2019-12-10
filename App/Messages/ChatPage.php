<?php
session_start();
if(!isset($_SESSION['name']))
{
  header("Location:../Login/Login page.php");
}
$uname=$_SESSION['name'];
include_once("../../core/user_messages.php");
//Whitespce
$reciever= trim($_GET['reciever']) ;
$fail="";

if(isset($_POST['send']))
{
  $table_name= $uname.$reciever;
  $table_name2= $reciever.$uname;
  $text= $_POST['text'];
  $text=trim($text);
  if ($text=="") {
    $fail="*Cannot Send Blank message.";
  }
  else
  {
    $res=checkChat($table_name);
    if($res) {
      $text= $text."---From ".$uname;
      //sendText($text,$table_name,$table_name2,$uname,$reciever);
    // $text= $text."---From ".$uname;
    // $sql3 = "INSERT INTO $table_name (Text, sender,reciever) VALUES('$text','$uname','$reciever')";
    // $sql4 = "INSERT INTO $table_name2 (Text, sender,reciever) VALUES('$text','$reciever','$uname')";
      if(sendText($text,$table_name,$table_name2,$uname,$reciever))
      {
        $fail="Sent";
      }
      else
      {
        $fail=  "Error in inserting: ";
      }
    }
    else
    {
    // echo "eikhane heh";
    // $sql="CREATE TABLE $table_name ( `SL` INT(255) NOT NULL AUTO_INCREMENT , `Text` VARCHAR(1000) NOT NULL , `sender` VARCHAR(255) NOT NULL , `reciever` VARCHAR(255) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`SL`));";

    // $sql2="CREATE TABLE $table_name2 ( `SL` INT(255) NOT NULL AUTO_INCREMENT , `Text` VARCHAR(1000) NOT NULL , `sender` VARCHAR(255) NOT NULL , `reciever` VARCHAR(255) NOT NULL , `time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`SL`));";
      $tabelCreate = tableNew($table_name,$table_name2);
      if ($tabelCreate) {
        $text= $text."---From ".$uname;
        $res2= sendText($text,$table_name,$table_name2,$uname,$reciever);
        if($res2)
        {
          $fail="Sent";
        }
        else
        {
          $fail=  "Error in inserting: ".mysqli_error($con);
        }
      }
      else
      {
        $fail= "unsuccessfull...";
      }

    }
  }
}







?>

<!DOCTYPE html>
<html>
<head>
  <title>Messages</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/header-fixed.css">
  <link rel="stylesheet" href="css/main.css">
  
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
  <table border="1"   align="center" width="60%" style=" table-layout: fixed;">

    <tr height="" >

      <td colspan="3" align="center"><h1>Chat History</h1></td>

    </tr>
    <?php
  //getting chat history
    $table_name= $uname.$reciever;
    $checkHistory = checkChat($table_name);
    if ($checkHistory) {
     $chatHistory= oldChat($table_name);
     $string= "\"word-wrap: break-word;\"";
     echo "<tr class=\"tableRow\">
     <th>Text</th>
     <th >Interacting With</th>
     <th style=\"width: 20px;\">Time</th>
     </tr>";
     foreach ($chatHistory as $row)
     {
      echo "<tr>";
      echo  "<td style=".$string.">".$row['Text']."</td>";
      echo  "<td>".$row['reciever']."</td>";
      echo  "<td align=\"center\" >".$row['time']."</td>";
      echo "</tr>";

    }

  }
  ?>
</table>
<table  align="center" width="60%" style=" table-layout: fixed;">
  <tr>
    <td align="center" >
      <form action="#" method="post">
        <font size="8">New Message</font><br>
        <textarea type="text" name="text" style="height:100px; width:800px; font-size:14pt;"></textarea><br/><br/>
        <label style="color: DarkRed;font-size:20px;"><?php echo $fail ?></label>
        <br><br><button type="submit" id="sendBtn" name="send">SEND</button>
      </form>
    </td>
  </tr>
</table>


</body>




</html>