<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>results</title>
</head>
<body>
<h1>echo "<p>hello $NAMES<p>"</h1>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$sum  = $num1 +$num2;
	$space = " ";
	$NAMES = $firstname.$space.$lastname;

	
	echo "<p><h1> the sum of $num1 and $num2 is: $sum<h1><p>";

	
}
?>
</body>
</html>
