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
	<div class="intro">
	<p>The easiest way to get your drinks delivered. Simply place
		your order, relax on your couch while we are taking care everything for you. Just pay the delivery person and enjoy! 
		Drinks at your door in less than
		an hour. Want a snack as well? Add comments to your order. Drink delivery
		was never easier. <a href="under_construction.php" target="_self">Learn more...</a></p>
	</div> <!-- intro -->
	<div class="main">
	<p class="latest">Our latest products</p>
	<table class="products">
	<tr>
		<td class="productnames"><a href="under_construction.php" target="_self">Barefoot Merlot 75cl</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">Stella Artois (12 cans)</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">BrewDog Punk India Pale Ale (IPA)</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">Glenmorangie The Original 70cl</a></td>
	</tr>
	<tr>
		<td class="productprice"><p>£5.00</p></td>
		<td class="productprice"><p>£12.00</p></td>
		<td class="productprice"><p>£1.80</p></td>
		<td class="productprice"><p>£35.00</p></td>
	</tr>
	<tr>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/barefoot_merlot.jpeg" alt="drink"></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/stella_artois.jpg" alt="drink"/></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/brewdog.jpg" alt="drink"/></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/glenmorangie.jpg" alt="drink"/></a></td>
	</tr>
	<tr>
		<td class="productnames"><a href="under_construction.php" target="_self">Jura 10 Years Single Malt 70cl</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">Hendrick's Gin 70cl</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">Miraval Côtes De Provence Rosé 75cl</a></td>
		<td class="productnames"><a href="under_construction.php" target="_self">Tiger Beer 640ml</a></td>
	</tr>
	<tr>
		<td class="productprice"><p>£25.00</p></td>
		<td class="productprice"><p>£27.00</p></td>
		<td class="productprice"><p>£15.00</p></td>
		<td class="productprice"><p>£1.80</p></td>
	</tr>
	<tr>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/jura.jpg" alt="drink"/></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/hendricks.jpg" alt="drink"/></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/miraval.jpg" alt="drink"/></a></td>
		<td><a href="under_construction.php" target="_self"><img class="drink" src="images/tiger.jpg" alt="drink"/></a></td>
	</tr>
	</table> <!-- products -->
	</div> <!-- main -->
	<div class="row">
	<table class = "row1">
	<tr>
	<td>
		<p><strong>Our offers</strong></p>
		<p>Explore our latest offers of some of the greatest drinks out there.<a href="under_construction.php" target="_self"> See more...</a></p>
	</td>
	<td>
		<p><strong>Gift ideas</strong></p>
		<p>Birthday...Wedding...Office party...Or just a simple weekend gathering? We've got you covered.<a href="under_construction.php" target="_self"> Find out more...</a></p>
	</td>
	<td>
		<p><strong>Free delivery</strong></p>
		<p>Spend more than £30 for a single order and get yourself a free delivery.<a href="under_construction.php" target="_self"> See more...</a></p>
	</td>
	</tr>
	</table> <!-- row1 -->
	</div> <!-- row -->
<div> <!-- head -->
		<input class="search" placeholder="Search your drink here...">
		<button class="sbutton">Search</button>

	</div>
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
</body>
</html>