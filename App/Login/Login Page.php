<?php
session_start();
if(isset($_SESSION['name']))
{
	if ($_SESSION['name']=="Admin") {
		header("Location:../Admin/Adminhome.php");
	}
	else
	{
		header("Location:../homee/home.php");
	}
	
   
}
include_once("../../core/user_service.php");

$unerr=$pwerr=$fail="";
if(isset($_POST['login']))
{
	$un=$_POST['username'];
	$pw=$_POST['password'];

	if($un=="")
	{
		$unerr="Please provide username";
	}
	else if($pw=="")
	{


		$pwerr="Please provide password";
	}

	else
	{
		$result=loadUserForLogin($un,$pw);
		if($result){
		$_SESSION['name']=$result['username'];
		setcookie("user", $result['username'], time()+86400);
		if ($_SESSION['name']=="Admin") {
			header("Location: ../Admin/Adminhome.php");
		}
		else
		{
			header("Location: ../Homee/home.php");
		}
		}
		else
		{
			$fail= "*Username Or Password is incorrect..";
		}

	}
}

?>





<html>
<head>
	<title>AIUB Community | Login</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<meta name="keywords" content="footer, address, phone, icons" />
	<link rel="stylesheet" href="assets/css/footer.css">
	
</head>
<body  class="landing">
	<section id="banner">
		<form method="POST" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">

			<div align="center" class="myDiv" >
				<center>
					<div align="center">
						<table >
							<tr>
								<td  colspan="2" rowspan="2" align="center" >
									<p style = "font-family:Impact, Charcoal, sans-serif;font-size:16px;">
										<font size="8" > LOGIN</font>
									</p>
								</td>
							</tr>
							<tr>
								<label><font size="3" color="red"><?= $fail; ?></font></label>
							</tr>
							<tr>
								<label><font size="3" color="red"><?= $unerr; ?></font></label>
							</tr>
							<tr>
								<label><font size="3" color="red"><?= $pwerr; ?></font></label>
							</tr>
							<tr>
								<td >
									<font size="5" style="font-family:Comic Sans MS, cursive, sans-serif;"> Username: &nbsp&nbsp&nbsp</font>
								</td>
								<td colspan="3">
									<input type="text" name="username" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>">  

								</td>
							</tr>
							<tr>
								<td>
									<font size="5" style="font-family:Comic Sans MS, cursive, sans-serif;"> Password: &nbsp&nbsp&nbsp</font>
								</td>
								<td>
									<input type="Password" name="password">

								</td>

							</tr>	
						</table>
					</div>
					<br/>
					<center><a href="../Sign Up/SignupPage.php"><font size="3" class="button special1 big1" >Not a member Yet?</font></a>
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" class="button special big" name="login" value="Login">

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