<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Name=$_POST['txtName'];
		
	$Email=$_POST['txtEmail'];
	$Mobile=$_POST['txtMobile'];
	$BirthDate=$_POST['txtDate'];
	
	$UserName=$_POST['txtUserName'];
	$Password=$_POST['txtPassword'];
	
	
	
	

	$con = mysqli_connect ("localhost","root", "", "shopping");

	$sql = "insert into customer_registration(CustomerName,Email,Mobile,BirthDate,UserName,Password) values('".$Name."','".$Email."',".$Mobile.",'".$BirthDate."','".$UserName."','".$Password."')";

	mysqli_query ($con, $sql);

	mysqli_close ($con);
	
	echo '<script type="text/javascript">alert("Registration Completed Succesfully");window.location=\'index-2.php\';</script>';

?>
</body>
</html>
