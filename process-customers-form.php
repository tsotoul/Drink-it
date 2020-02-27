<?php

//code to insert into the database
if (isset($_POST['submit'])){

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

//query to insert into the database	
$query = "INSERT INTO customers (firstName, lastName, email, password1, password2, address, postcode, homeNumber, mobileNumber, day, month, year, agree) VALUES ('$firstName', '$lastName', '$email', '$password1', '$password2', '$address', '$postcode', '$homeNumber', '$mobileNumber', '$day', '$month', '$year', '$agree')";


mysqli_query($connect, $query);
}

//code to remove customer from the database
if (isset($_GET['removeID'])){
  $id = $_GET['removeID'];
 
  mysqli_query($connect, "DELETE FROM customers WHERE customerID=$id");
}
?> 