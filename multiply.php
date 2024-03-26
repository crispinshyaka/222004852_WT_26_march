<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>product</title>
</head>
<center>
<body>
<h>the finals are:</h>
<?php
if ($_SERVER['REQUEST_METHOD'] =="POST") {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$product = $num1*$num2;
	echo "<p>$fname $lname<p>";
	echo "<p>the product of $num1 and $num2 is: $product<p>";
}
?>
</body>
</center>
</html>