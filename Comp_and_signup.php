<?php
if (isset($_GET["compute"])) {
	# code...
	$Value1 = $_GET["Value1"];
	$Value2 = $_GET["Value2"];
switch ($_GET["Compute"]) {
	case "Addition" : $sum=$Value1 + $Value2;
		echo $sum;
		break;
	
	case "Subtraction" : $sum=$Value1-$Value2;
		echo $sum;
		break;
	
	case "Multiplication" : $sum=$Value1*$Value2;
		echo $sum;
		break;
	
	case "Division" : $sum=$Value1/$Value2;
		echo $sum;
		break;	
	
}
}
if (isset($_GET["register"])) {
	$Username = $_GET["Username"];
	$Password = $_GET["Password"];
	mysql_connect('localhost', 'root', '') or die("not connected");
	mysql_select_db("Login site");
	mysql_query("INSERT INTO `Username`(`id`, `Username`, `Password`) VALUES ('NULL','$Username','$Password')");
	echo "ur account is succesfully created";
}

?>
