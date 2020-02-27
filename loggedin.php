<?php
session_start();
ini_set('arg_separator.output',';');

if (!isset($_SESSION['email'])){
	header("location: loggedout.php");
	die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Drink-it</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
</head>
<header>
	<div><a class="toplinks" href="session-feedback.php">Logout</a></div>
	<div><a class="toplinks" href="under_construction.php">Your basket</a></div>
	<div><a class="toplinks" href="register.php">Register</a></div><br/>
	<div><a class="toplinks" href="loggedin.php">Members page</a></div>
	<div><a class="toplinks" href="staff_area.php">Staff page</a></div>
	<a href="landingpage.php"><img class="logo" src="images/logo2.png" alt="logo"></a>
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
<div class="login_result"><b><br/>✔ Login successfull, welcome back!</b></div>
<div class="login_result2"><br/>In this members section, you will find personalised offers based on your previous orders, exclusive discounts and order tracking system.</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<table class="offers_table">
	<tr>
		<th>Latest industry news</th>
		<th>Exclusive Discounts</th>
		<th>Recent Orders</th>
  </tr>
	<tr>
		<td class = "offers" style="vertical-align:top"> 
			<br/>
			<ul>
				<li><p><a href="http://www.drinksretailingnews.co.uk/news/fullstory.php/aid/19110/Heineken_sponsors_Euro_2020_and_Champions_League.html" target="_blank" style="color:blue">Heineken sponsors Euro 2020 and Champions League</a></p>
				<p>Heineken has maintained its ties with football by extending its Champions League sponsorship and signing on as the official beer of Euro 2020. (http://www.drinksretailingnews.co.uk/)</p></li>
				<li><p><a href="http://www.drinksretailingnews.co.uk/news/fullstory.php/aid/19034/Tennent_s_accelerates_sustainability_plans.html" target="_blank" style="color:blue">Tennent's accelerates sustainability plans</a></p>
				<p>Tennent’s has announced enhanced investment of £14.23 million in sustainability, as part of its strategy to boost its contribution to the fight against climate change. The investment is enabling the company to introduce green technology and strategic partnerships. (http://www.drinksretailingnews.co.uk/)</p></li>
				<li><p><a href="https://beertoday.co.uk/brewdog-bond-1119/" target="_blank" style="color:blue">BrewDog launches bond that pays out in cash and beer</a></p>
				<p>BrewDog has launched a bond offer on Crowdcube.com. A previous BrewDog bond hosted by the platform achieved its goal of £10million in a record 24 days. There is a unique method for rewarding those who take out a bond, via a fixed interest rate of 6% per annum gross, across four years, paid out 3% in cash and 3% in beer. (https://beertoday.co.uk/)</p></li>
			</ul>
		</td> <!-- offers -->
		<td class = "offers" style="vertical-align:top"> 
			<ul>
				<li><p><b>BLACK FRIDAY DEAL</b></p>
				<p>Choose from our great variety of products exclusively for you. <a href="under_construction.php" target="_self" style="color:blue">Learn more...</a></p></li><br/><br/>
				<li><p>Get <span style="font-size:20px; font-weight:bold">30%</span> exclusive discount when ordering £15 or more. Claim this offer <a href="under_construction.php" target="_self" style="color:blue">here</a></p></li><br/><br/>
				<li>Recycle your empty bottles with us and win a <span style="font-size:20px; font-weight:bold">FREE</span> delivery service for a month. Siply keep the bottles after use, and give them back to the delivery person of your next order. <a href="under_construction.php" target="_self" style="color:blue">See how</a></li>
				<br/><li><p style="color:red; "><u><b>Drink of the month</b></u></p>
				<p><b>Jura 10 Years Single Malt 70cl - </b><a href="under_construction.php" target="_self" style="color:blue">Add to basket</a></p></li><br/>
		
			</ul>
		</td> <!-- offers -->
		<td class = "offers" style="vertical-align:top"> 
			<ul>
				<br/><li><a href="under_construction.php" target="_self"><img class="drink2" src="images/barefoot_merlot.jpeg" alt="drink"></a>
				<p>Barefoot Merlot 75cl - <a href="under_construction.php" target="_self" style="color:blue">Add to basket</a></p></li><br/>
				<br/><li><a href="under_construction.php" target="_self"><img class="drink2" src="images/stella_artois.jpg" alt="drink"/></a>
				<p>Stella Artois (12 cans) - <a href="under_construction.php" target="_self" style="color:blue">Add to basket</a></p></li><br/>
				<br/><li><a href="under_construction.php" target="_self"><img class="drink2" src="images/tiger.jpg" alt="drink"/></a>
				<p>Tiger Beer 640ml - <a href="under_construction.php" target="_self" style="color:blue">Add to basket</a></p></li><br/>
			</ul>
		</td> <!-- offers -->
	</tr>
</table> <!-- offers_table -->
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