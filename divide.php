<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>results</title>
</head>
<body>
<h1>the site</h1>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$firstname =$_POST['firstname'];
	$lastname =$_POST['lastname'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$space = " ";
	$QUOTIENT  = $num1 /$num2;
	
	

	echo "<p><b>hello $firstname$space$lastname</b><p>";
	echo "<p><h1> the quotient of $num1 and $num2 is: $QUOTIENT<h1><p>";
	
	
}
?>
</body>
</html>
