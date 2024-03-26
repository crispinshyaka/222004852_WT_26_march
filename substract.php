<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>results</title>
</head>
<body>
<h1>the result is</h1>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$fname = $_POST['fname'];
	$lname  = $_POST['lname'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$difference  = $num1 -$num2;
	echo "<p>$fname $lname<p>";
	echo "<p> the difference of $num1 and $num2 is: $difference<p>";
}
?>
</body>
</html>
