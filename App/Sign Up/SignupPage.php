<?php
/////////////////////////////////////////////////////////////////////////////
include_once("../../core/user_service.php");
/////////////////////////////////////////////////////////////////////////
$name=$un=$id=$email=$cemail=$pw=$cpw="";
$nameerr=$unerr=$iderr=$emailerr=$cemailerr=$pwerr=$cpwerr=$err="";
$ab = "-";
$count=0;
$counter=0;
$a = "@";
$b='.';
if(isset($_POST['Submit']))
{
	//Name...................###################################################
	$name=$_POST['name'];
	if($name=="")
	{
		$nameerr= "*Enter name Please..";
		$counter=$counter+1;
	}
	else if(ord($name[0])>=48 && ord($name[0])<=57)
	{
		$nameerr= "*cannot start with a number..";
		$counter=$counter+1;
	}
	elseif(str_word_count($name)<2)
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

//Username............##########################################################
	$un=$_POST['username'];
	if($un=="")
	{
		$unerr= "*Username is missing..";
		$counter=$counter+1;
	}
	else if(strlen($un)<2)
	{
		$unerr= "*Username has to more than 1 character.";
		$counter=$counter+1;
	}
	elseif(str_word_count($un)>=2)
	{
		$unerr= "*UserName cannot be more than one word.";
		$counter=$counter+1;
	}
	elseif (str_word_count($un)==1) {
		$resultUsers= checkUserName();
		foreach ($resultUsers as $rows)
		{
			if ($rows['Username']==$un) {
				$unerr= "*UserName exists.";
				$counter=$counter+1;
				break;
			}
		}
	}
	else
	{
		for($i=0;$i<strlen($un);$i++)
		{
			if((ord($un[$i])>=65 && ord($un[$i])<=90)||(ord($un[$i])>=97 && ord($un[$i])<=122) || ord($un[$i])==45 || ord($un[$i])==46 || ord($un[$i])==95)
			{
				if($i==strlen($un)-1)
				{
					break;
					
				}
				else 
				{
					continue;
				}

			}
			else
			{
				$unerr= "*Invalid username..";
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
	else if(strlen($id)!=10)
	{
		$iderr= "ID has to be 10 characters long.";
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
         elseif(ord($id[$i])<=48 || ord($id[$i])>=57)
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

//Password..........###################################################################

	$pw=$_POST['password'];
	if($pw=="")
	{
		$pwerr= "*Password is missing..";
		$counter=$counter+1;
	}
	else if(strlen($pw)<8)
	{
		$pwerr= "*Password has to be at least 8 characters.";
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
					$pwerr= "*Invalid password.Password must contain at least one of the special characters (@, #, $, %)";
					$counter=$counter+1;
				}
				else
				{
					continue;
				}
			}
		}

	}

//Confirm Password........###################################################################
	$cpw=$_POST['cpassword'];
	if($cpw=="")
	{
		$cpwerr="*Please confirm password";
		$counter=$counter+1;
	}
	else if($pw!==$cpw)
	{
		$cpwerr= "*Password did not match..";
		$counter=$counter+1;
	}

	else
	{
		if ($counter>0) {
		}
		else
		{
			$result=addNewUser($un,$name,$id,$email,$pw);
			if($result){
				header("location: ../Reg Successful/RegSuccess.php");
			}

		}
		
	}
}

?>
<html>
<head>
	<title>AIUB Community | Sign Up</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="assets/css/footer.css">
</head>
<body class="landing">
	<section id="banner">
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<div align="center" class="myDiv" >
				<center><font size="7" color="Green" > Sign Up</font></center>
				<center><label><font color="red"><?= $err; ?></font></label></center>
				<br/>
				<div align="center">
					<table>
						<tr>
							<td >
								<font size="5" > Name: &nbsp&nbsp&nbsp</font>
							</td>
							<td colspan="3" width="450" height="30">
								<input type="text" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ''; ?>">  
								<label><font color="red"><?= $nameerr; ?></font></label>
							</td>
						</tr>
						<tr>
							<td height="30">

								<font size="5" > Username: &nbsp&nbsp&nbsp</font>
								<font size="2" color="red"><br>*Username can not be changed later</font>
							</td>
							<td colspan="3">
								<input type="text" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">  
								<label><font color="red"><?= $unerr; ?></font></label>
							</td>
						</tr>
						<tr>
							<td height="30">
								<font size="5" > ID: &nbsp&nbsp&nbsp</font>
							</td>
							<td colspan="3">
								<input type="text" name="id" value="<?php echo isset($_POST["id"]) ? $_POST["id"] : ''; ?>">  
								<label><font color="red"><?= $iderr; ?></font></label>
							</td>
						</tr>
						<tr>
							<td height="30">
								<font size="5" > Email: &nbsp&nbsp&nbsp</font>
							</td>
							<td colspan="3" height="30">
								<input type="text" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">  
								<label><font color="red"><?= $emailerr; ?></font></label>
							</td>
						</tr>

						<tr>
							<td height="30">
								<font size="5" > Confirm Email: &nbsp&nbsp&nbsp</font>
							</td>
							<td colspan="3" height="30">
								<input type="text" name="cemail" value="<?php echo isset($_POST["cemail"]) ? $_POST["cemail"] : ''; ?>">  
								<label><font color="red"><?= $cemailerr; ?></font></label>
							</td>
						</tr>
						<tr>
							<td height="30">
								<font size="5" > Password: &nbsp&nbsp&nbsp</font>
							</td>
							<td height="30">
								<input type="Password" name="password"value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>">
								<label><font color="red"><?= $pwerr; ?></font></label>
							</td>

						</tr>
						<tr>
							<td height="30">
								<font size="5" >Confirm Password: &nbsp&nbsp&nbsp</font>
							</td>
							<td height="30">
								<input type="Password" name="cpassword">
								<label><font color="red"><?= $cpwerr; ?></font></label>
							</td>

						</tr>	
					</table>
				</div>
				<center><input type="submit" name="Submit" value="Submit" style="background:green;width: 100px; height: 30px;">
					<div class="container signin">
						<p>Already have an account? <a href="../Login/Login Page.php">Sign in</a>.</p>
					</div>

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