<?php

//code to update database
if (isset($_GET['customerID'])) {
	$id = $_GET['customerID'];

}

if (isset($_POST['update'])) {
	
		$firstName = "";
		$lastName = "";
		$email = "";
		$password1 = "";
		$password2 = "";
		$address = "";
		$postcode = "";
		$homeNumber = "";
		$mobileNumber = "";
		$day = "";
		$month = "";
		$year = "";
		$agree = "0";

		if (!empty($_POST['firstName'])){$firstName = $_POST['firstName'];}
		if (!empty($_POST['lastName'])){$lastName = $_POST['lastName'];}
		if (!empty($_POST['email'])){$email = $_POST['email'];}
		if (!empty($_POST['password1'])){$password1 = $_POST['password1'];}
		if (!empty($_POST['password2'])){$password2 = $_POST['password2'];}
		if (!empty($_POST['address'])){$address = $_POST['address'];}
		if (!empty($_POST['postcode'])){$postcode = $_POST['postcode'];}
		if (!empty($_POST['homeNumber'])){$homeNumber = $_POST['homeNumber'];}
		if (!empty($_POST['mobileNumber'])){$mobileNumber = $_POST['mobileNumber'];}
		if (!empty($_POST['day'])){$day = $_POST['day'];}
		if (!empty($_POST['month'])){$month = $_POST['month'];}
		if (!empty($_POST['year'])){$year = $_POST['year'];}
		if (isset($_POST['agree'])){$agree = "1";} else {$agree = "0";}
	
	
	
	$query2 = "UPDATE customers
		SET firstName = '$firstName'
		    , lastName = '$lastName'
			, email = '$email'
			, password1 = '$password1'
			, password2 = '$password2'
			, address = '$address'
			, postcode = '$postcode'
			, homeNumber = '$homeNumber'
			, mobileNumber = '$mobileNumber'
			, day = '$day'
			, month = '$month'
			, year = '$year'
			, agree = '$agree'
	WHERE customerID=$id";
	mysqli_query($connect, $query2);
}