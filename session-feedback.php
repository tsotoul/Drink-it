<?php
session_start();
// connect to the database
require_once('connect.php');
ini_set('arg_separator.output',';');

// form processing
// log in
if (isset($_POST['email'])){
  
  //authenticate customer 
  if (!empty($_POST['email'])){$usr = $_POST['email'];}
  if (!empty($_POST['password'])){$pwd = $_POST['password'];}

  // query whether there is a customer with $usr for username and 
  // $pwd for password in the users database
  $query = "SELECT * FROM customers WHERE email ='$usr' AND password1='$pwd'";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0){
	  $_SESSION['email'] = $usr;
	  $_SESSION['password'] = $pwd;
  }
}
?>
<!DOCTYPE html>
<html> 
<head>
	<title>Drink-it</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
</head>
<header>
	
	<div><?php if(!isset($_SESSION['email'])){echo '<a class="toplinks" href="login.php">Login</a>';}else{echo '<a class="toplinks" href="session-feedback.php">Logout</a>';}?></div>
	<div><a class="toplinks" href="under_construction.php">Your basket</a></div>
	<div><a class="toplinks" href="register.php">Register</a></div><br/>
	<div><a class="toplinks" href="loggedin.php">Members page</a></div>
	<div><a class="toplinks" href="staff_area.php">Staff page</a></div>
	<div class="loginpopup"><?php if(!isset($_SESSION['email'])){
		echo '<div class="account">
			<form action = "session-feedback.php" method="post">
			Login:
			<div>
				<input type="text" name="email" placeholder="E-Mail">
			</div>
             Password:
			<div>
				<input type="password" name="password" placeholder="Password">
			</div>
			<div>
				<input type="submit" value="Login">
			</div>
			</form>
		</div>';}?>
		<a href="landingpage.php"><img class="logo" src="images/logo2.png" alt="logo"></a>
	</div>  <!-- loginpopup -->
</header> 
<body>
	<div class="menu">
		<div class="item"><a href="landingpage.php" target="_self">Home</a></div>
		<div class="item"><a href="under_construction.php" target="_self">About</a></div>
		<div class="item"><a href="guidance.php" target="_self">How to/Guidance</a></div>
		<div class="item"><a href="under_construction.php" target="_self">Shop</a></div>
		<div class="item"><a href="under_construction.php" target="_self">Contact us</a></div>
		<div class="item"><input type="text" placeholder="Search..."></div>
	</div> <!-- menu -->
<div class="background2">
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<div class="login_result">
<?php
if (isset($_SESSION['email']) && (mysqli_num_rows($result) > 0)){
  header('location: loggedin.php');
}
//else if ($usr == 'manager@manager.com' && $pwd == 'manager'){
//	header('location: staff_area.php');
//}
else if (isset($_POST['email'])){
  echo '✘ Invalid username or password. <a href="login.php" style="color:blue;">Try again</a>';
}
else{
	unset($_SESSION['email']);
	session_destroy();
	header('location: loggedout.php');
}
?>
</div> <!-- login_result -->
</div> <!-- background2 -->
<div class="foot">
	<table class="footer">
	<tr>
	<td>
		<p class="footer_head"><strong><u>Site map</u></strong></p>
		<p><a href="landingpage.php" target="_self">Home</a></p>
		<p><a href="under_construction.php" target="_self">About</a></p>
		<p><a href="guidance.php" target="_self">How to/Guidance</a></p>
		<p><a href="under_construction.php" target="_self">Shop</a></p>
		<p><a href="under_construction.php" target="_self">Contact us</a></p>
	</td>
	<td>
	<p class="footer_head"><strong><u>Find us on</u></strong></p>
		<a href="https://www.facebook.com/" target="_blank"><img class="social" src="images/facebook.png" alt="facebook"></a>
		<a href="https://twitter.com/" target="_blank"><img class="social" src="images/twiter.png" alt="twiter"></a>
		<a href="https://www.youtube.com/" target="_blank"><img class="social" src="images/youtube.png" alt="youtube"></a>
		<a href="https://www.instagram.com/" target="_blank"><img class="social" src="images/instagram.jpg" alt="instagram"></a><br><br>
		<a href="https://vimeo.com/" target="_blank"><img class="social" src="images/vimeo.png" alt="vimeo"></a>
		<a href="https://vimeo.com/" target="_blank"><img class="social" src="images/pinterest.png" alt="pinterest"></a>
	</td>
	<td>
		<p class="footer_head"><strong><u>Address</u></strong></p>
		<p style="color:white"> 1 Waterloo Place</p>
		<p style="color:white"> Edinburgh</p>
		<p style="color:white"> Midlothian</p>
		<p style="color:white"> EH1 3BG</p>
	</td>
	<td>
		<p class="footer_head"><strong><u>Our location</u></strong></p>
		<p class="footer_head"><i>Click the image to open in a new tab</i></p>
		<a href="https://www.google.co.uk/maps/@55.9515032,-3.199199,15.25z?hl=en" target="_blank"><img class="map" src="images/map.png" alt="map"></a>
	</td>
	</tr>
	</table> <!-- footer -->
</div> <!-- foot -->
</body>
</html>