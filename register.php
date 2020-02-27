<?php
session_start();
ini_set('arg_separator.output',';');
?>

<!DOCTYPE html>
<html lang="en">
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
	</div> <!-- loginpopup -->
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
<div class="background">
	<a href="guidance.php"><img class="sticky" src="images/help.png" alt="help"></a>

	<div  class="general">
		<div class="registerdiv">
			<form action = "confirmation.php" method="post">
<fieldset style="width:500px">
<legend>CREATE ACCOUNT:</legend>
	<label for="firstName">First Name:</label><br/>
	<input size="40" type="text" name="firstName" id="firstName" required autofocus placeholder="Enter your first name here"/><br/>
	<br/><label for="lastName">Last Name:</label><br/>
	<input size="40" type="text" name="lastName" id="lastName" required placeholder="Enter your surname here"/><br/>
	<br/><label for="email">Email: (Your email will be used as your username)</label><br/>
	<input size="40" type="email" name="email" id="email" required placeholder="Enter your email here"/><br/>
	<br/><label for="password1">Password:</label><br/>
	<input size="40" name="password1" type="password" required id="password1" placeholder="Enter your password here"/><br/>
	<br/><label for="password2">Password:</label><br/>
	<input size="40" name="password2" type="password" required onchange="check();" id="password2" placeholder="Re-enter your password here"/><br/><br/>
	<span id="match"><b></b></span><br>
	<br/><label for="address">Address:</label><br/>
	<textarea name="address" id="address" rows="5" cols="40"></textarea>
	<br/><label for="postcode">Postcode:</label><br/>
	<input size="11" name="postcode" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" id="postcode" required placeholder="EHxx XXX"/><br/>
	<br/><label for="homeNumber">Home number:</label><br/>
	<input type="number" name="homeNumber" id="homeNumber" required placeholder="Enter your home number"/><br/>
	<br/><label for="mobileNumber">Mobile number:</label><br/>
	<input type="number" name="mobileNumber" id="mobileNumber" required placeholder="Enter your mobile number"/><br/><br/>
	<hr>
	<label>Date of Birth:</label><br/>
	<br><label class = "dob" for="day">Day:</label>
	<select name="day" id = "day" size="1">
		<option selected="selected" value="1">01</option>
		<option value="2">02</option>
		<option value="3">03</option>
		<option value="4">04</option>
		<option value="5">05</option>
		<option value="6">06</option>
		<option value="7">07</option>
		<option value="8">08</option>
		<option value="9">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<label class = "dob" for="month">Month:</label>
	<select name="month" id="month">
		<option selected="selected" value="1">01</option>
		<option value="2">02</option>
		<option value="3">03</option>
		<option value="4">04</option>
		<option value="5">05</option>
		<option value="6">06</option>
		<option value="7">07</option>
		<option value="8">08</option>
		<option value="9">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
	</select>
	<label class = "dob" for="year">Year:</label>
	<select name="year" id="year" size="1">
		<option selected="selected" value="Before 2000">Before 1980</option>
		<option value="1980">1980</option>
		<option value="1981">1981</option>
		<option value="1982">1982</option>
		<option value="1983">1983</option>
		<option value="1984">1984</option>
		<option value="1985">1985</option>
		<option value="1986">1986</option>
		<option value="1987">1987</option>
		<option value="1988">1988</option>
		<option value="1989">1989</option>
		<option value="1990">1990</option>
		<option value="1991">1991</option>
		<option value="1992">1992</option>
		<option value="1993">1993</option>
		<option value="1994">1994</option>
		<option value="1995">1995</option>
		<option value="1996">1996</option>
		<option value="1997">1997</option>
		<option value="1998">1998</option>
		<option value="1999">1999</option>
		<option value="2000">2000</option>
		<option value="2001">2001</option>
		<option value="2002">2002</option>
		<option value="2003">2003</option>
		<option value="2004">2004</option>
		<option value="2005">2005</option>
		<option value="2006">2006</option>
		<option value="2007">2007</option>
		<option value="2008">2008</option>
		<option value="2009">2009</option>
		<option value="2010">2010</option>
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
	</select>	<br/>
	<hr>
	<input type="checkbox" name="agree" id="agree" value="0"/>
		<label>By ticking this box you confirm that all 
							the information you provided above is 
							true and you agree with our 
							<a style="color:blue" href="under_construction.php" target="_self">terms and conditions</a></label>
	<br><br>
	<input class="reg_button" name="submit" Value="Complete registration" type="submit"/>
</fieldset> 
</form>
</div> <!-- registerdiv -->
<br>
<div class = "disclaimer">
<h2> GDPR Disclaimer</h2>
<p>Your information will be processed in accordance with UK and EU Data Protection laws and we have robust systems in place to keep your information safe.

Your information will be stored on our secure systems and shared with a relevant Drink-it employee who will process your account registration.

Please see our full privacy policy <a style="color:blue" href="under_construction.php" target="_self">here.</a></p>

<p>Drink-it is committed to ensuring the security and protection of the personal information that we process, and to provide a compliant and consistent approach

 to data protection. If you have any questions related to our GDPR compliance, please contact our Data Protection Officer or make a Data Subject Access Request.</p>
 <br><br>
 <img src="images/gdpr.jpg" alt="gdpr" height="220" width="420"></img>
</div>  <!-- disclaimer -->
</div> <!-- general -->
</div> <!-- background -->
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
<script> <!-- script to check if the passwords match -->
 function check() {
  if (password1.value == password2.value) {
  document.getElementById('match').innerHTML="Passwords match";
  } else {
  document.getElementById('match').innerHTML="Passwords don't match.";
  }}
</script>
</body>
</html>